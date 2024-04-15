<?php
   #mysqli_connect() 建立資料庫連結 //建立與 MySQL 數據庫的連接的函數
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立一個與 "db4free.net" 主機上名為 "immust" 的 MySQL 數據庫的連接。如果連接成功，則連接對象將存儲在 $conn 變數中，以便後續的數據庫操作中使用
   #mysqli_query() 從資料庫查詢資料 //mysqli_query() 函數來向 MySQL 數據庫發送一個查詢
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
