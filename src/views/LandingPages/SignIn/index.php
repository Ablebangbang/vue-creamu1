<?php require "header.php"; ?>

  <main>

    <?php

        if (isset($_SESSION["userId"])) {

            echo '<p class="login-status">您已經登錄系統.</p>';

        } else {

            echo '<p class="logout-status">您已經退出系統.<a href="reset-password.php" class="btn">忘記密碼</a></p>';

            if (isset($_GET["newpwd"])) {
              if ($_GET["newpwd"] === "passwordupdated") {

                echo '<p class="logout-status success-message">您的密碼已經被重新設定，請再次登錄.</p>';

              }
            }

        }

    ?>

  </main>

<?php require "footer.php"; ?>
