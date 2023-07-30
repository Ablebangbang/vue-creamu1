<?php

if (isset($_POST["reset-request-submit"])) {

  $selector = bin2hex(random_bytes(8));
  $token = random_bytes(32);

  $url = "http://ken-cens.com/~doritosl/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

  $expires = date("U") + 60 * 30;

  require "database_handler.php";

  $userEmail = $_POST["email"];

  $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
  $statement = mysqli_stmt_init($connection);
  if (!mysqli_stmt_prepare($statement, $sql)) {

    echo "SQL錯誤!";
    exit();

  } else {

    mysqli_stmt_bind_param($statement, "s", $userEmail);
    mysqli_stmt_execute($statement);

  }

  $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
  $statement = mysqli_stmt_init($connection);
  if (!mysqli_stmt_prepare($statement, $sql)) {

    echo "SQL錯誤!";
    exit();

  } else {

    $hashedToken = password_hash($token, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($statement);

  }

  mysqli_stmt_close($statement);
  mysqli_close($connection);

  $to = $userEmail;

  $subject = "Reset your password";

  $message = "<p>Please use below link to reset your password: </br>";
  $message .= "<a href='" . $url . "'>" . $url . "</a></p>";

  $header = "From: kencens <kencens@gmail.com> \r\n";
  $header .= "Reply-To: kencens@gmail.com \r\n";
  $header .= "Content-type: text/html \r\n";

  mail($to, $subject, $message, $header);

  header("Location: reset-password.php?reset=success");

} else {

  header("Location: index.php");

}

?>
