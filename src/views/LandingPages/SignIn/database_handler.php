<?php

    $servername = "localhost";
    $dbUsername = "doritosl_admin";
    $dbPassword = "gdgVTQgyaVUQ";
    $dbName = "doritosl_loginSystem";
    
    $connection = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if (!$connection) {
        
        // echo "連結數據庫成功!";
        die("連結數據庫失敗: ".mysqli_connect_error());
        
    }
    
?>