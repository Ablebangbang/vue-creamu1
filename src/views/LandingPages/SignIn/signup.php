<?php require "header.php"; ?>

  <main class="signup-form">
    <h1>註 冊</h1>
    <?php
    
        if (isset($_GET["error"])) {
            
            if ($_GET["error"] == "emptyfields") {
                
                echo "請輸入完整的信息!";
                
            } elseif ($_GET["error"] == "invalidmail") {
                
                echo "請輸入正確的郵箱!";
                
            } elseif ($_GET["error"] == "passwordcheck") {
                
                echo "請輸入相同的密碼!";
                
            } elseif ($_GET["error"] == "sqlerror") {
                
                echo "數據庫連結失敗!";
                
            } elseif ($_GET["error"] == "usertaken") {
                
                echo "您輸入的帳號已經被使用!";
                
            } elseif ($_GET["signup"] == "success") {
                
                echo "註冊成功!";
                
            }
        }
    
    ?>
    <form action="signup_process.php" method="post">
        <p><input type="text" name="uid" placeholder="用戶帳號"></p>
        <p><input type="text" name="mail" placeholder="電子郵箱"></p>
        <p><input type="password" name="password" placeholder="密碼"></p>
        <p><input type="password" name="password-repeat" placeholder="再次輸入密碼"></p>
        <button type="sutmit" name="signup-submit">註 冊</button>
    </form>
  </main>

<?php require "footer.php"; ?>
