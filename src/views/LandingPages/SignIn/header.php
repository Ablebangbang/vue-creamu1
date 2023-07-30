<?php

    session_start();
    
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>登錄系統</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">主頁</a></li>
          <li><a href="#">關於我們</a></li>
          <li><a href="#">聯繫方式</a></li>
          <li class="form-inline">
            <?php
            
                if (isset($_SESSION["userId"])) {
                    
                    echo '<form action="logout.php" method="post">
                <button type="submit" name="logout-submit" style="margin-top: 9px;">退出登錄</button>
              </form>   ';
                    
                } else {
                    
                    echo '<form action="login.php" method="post">
                <input type="text" name="mailuid" placeholder="用戶帳號/電子郵箱">
                <input type="password" name="pwd" placeholder="密碼">
                <button type="submit" name="login-submit">登 錄</button>
              </form>
              <a href="signup.php">註 冊</a>';
                    
                }
            
            ?>              
                       
          </li>
        </ul>

        <div>

        </div>

      </nav>
    </header>
