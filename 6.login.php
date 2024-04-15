<?php
   #mysqli_connect() 建立資料庫連結 //建立與 MySQL 數據庫的連接的函數
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立一個與 "db4free.net" 主機上名為 "immust" 的 MySQL 數據庫的連接。如果連接成功，則連接對象將存儲在 $conn 變數中，以便後續的數據庫操作中使用
   #mysqli_query() 從資料庫查詢資料 //mysqli_query() 函數來向 MySQL 數據庫發送一個查詢
   $result=mysqli_query($conn, "select * from user"); //從名為 "user" 的表中選擇所有的列和行
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來 //從查詢結果集中逐行獲取數據的函數
   $login=FALSE; //創建一個變數 $login，並將其初始化為布林值 FALSE
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } //遍歷查詢結果集中的每一行數據，並檢查每一行的 "id" 和 "pwd" 欄位的值是否與 POST 請求中獲取的值匹配。如果找到了匹配的用戶，則將 $login 變數設置為 TRUE，表示用戶已經成功登錄。

   if ($login==TRUE) //當 $login 變數的值為 TRUE 時，程式碼塊中的相應程式碼將被執行
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
