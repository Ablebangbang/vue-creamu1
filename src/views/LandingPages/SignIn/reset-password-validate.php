<?php

  if (isset($_POST["reset-password-submit"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if (empty($password) || empty($passwordRepeat)) {

      header("Location: create-new-password.php?newpwd=empty&selector=" . $selector . "&validator=" . $validator);
      exit();

    } elseif ($password !== $passwordRepeat) {

      header("Location: create-new-password.php?newpwd=pwdnotthesame&selector=" . $selector . "&validator=" . $validator);
      exit();

    }

    require "database_handler.php";

    $currentDate = date("U");

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
    $statement = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($statement, $sql)) {

      echo "SQL錯誤!";
      exit();

    } else {

      mysqli_stmt_bind_param($statement, "ss", $selector, $currentDate);
      mysqli_stmt_execute($statement);

      $result = mysqli_stmt_get_result($statement);
      if (!$row = mysqli_fetch_assoc($result)) {

        echo "請重新提交您的重設密碼申請!";
        exit();

      } else {

        $tokenBin = hex2bin($validator);
        $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

        if ($tokenCheck == false) {

          echo "請重新提交您的重設密碼申請!";
          exit();

        } elseif ($tokenCheck === true) {

          $tokenEmail = $row["pwdResetEmail"];

          $sql = "SELECT * FROM users WHERE userEmails=?;";
          $statement = mysqli_stmt_init($connection);

          if (!mysqli_stmt_prepare($statement, $sql)) {

            echo "SQL錯誤！";
            exit();

          } else {

            mysqli_stmt_bind_param($statement, "s", $tokenEmail);
            mysqli_stmt_execute($statement);

            $result = mysqli_stmt_get_result($statement);
            if (!$row = mysqli_fetch_assoc($result)) {

              echo "請重新提交您的重設密碼申請!";
              exit();

            } else {

              $sql = "UPDATE users SET pwd=? WHERE userEmails=?;";
              $statement = mysqli_stmt_init($connection);

              if (!mysqli_stmt_prepare($statement, $sql)) {

                echo "SQL錯誤！";
                exit();

              } else {

                $newPwdHash = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($statement, "ss", $newPwdHash, $tokenEmail);
                mysqli_stmt_execute($statement);

                $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
                $statement = mysqli_stmt_init($connection);

                if (!mysqli_stmt_prepare($statement, $sql)) {

                  echo "SQL錯誤！";
                  exit();

                } else {

                  mysqli_stmt_bind_param($statement, "s", $tokenEmail);
                  mysqli_stmt_execute($statement);
                  header("Location: index.php?newpwd=passwordupdated");

                }

              }

            }

          }

        }

      }

    }

  } else {

    header("Location: index.php");

  }

?>
