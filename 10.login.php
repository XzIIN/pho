<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立與 MySQL 數據庫的連接
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user"); //從 "user" 表中選擇所有的列和行
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE; //初始化登錄狀態為 FALSE
   while ($row=mysqli_fetch_array($result)) { //遍歷查詢結果集中的每一行
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) { //檢查用戶輸入的帳號和密碼是否與數據庫中的某一行匹配
       $login=TRUE; //如果匹配成功，將登錄狀態設置為 TRUE
     }
   } 
   if ($login==TRUE) { //如果登錄狀態為 TRUE，則執行以下代碼塊
    session_start(); //啟動 PHP 會話
    $_SESSION["id"]=$_POST["id"]; //將用戶的帳號存儲在會話中
    echo "登入成功"; //輸出登錄成功的消息
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>"; //在 3 秒後重新定向到 bulletin.php 頁面
   }

  else{ //如果登錄狀態為 FALSE，則執行以下代碼塊
    echo "帳號/密碼 錯誤"; //輸出帳號/密碼錯誤的消息
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //在 3 秒後重新定向到 login.html 頁面
  }
?>
