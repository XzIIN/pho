<?php
   #mysqli_connect() 建立資料庫連結 //建立與 MySQL 數據庫的連接的函數
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //
   #mysqli_query() 從資料庫查詢資料 //mysqli_query() 函數來向 MySQL 數據庫發送一個查詢
   $result=mysqli_query($conn, "select * from user"); //
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來 //從查詢結果集中逐行獲取數據的函數
   while ($row=mysqli_fetch_array($result)) { //
     echo $row["id"]." ".$row["pwd"]."<br>"; //
   } 
?>
