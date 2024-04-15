<?php
    #mysqli_connect() 建立資料庫連結 //建立與 MySQL 數據庫的連接的函數
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立一個與 "db4free.net" 主機上名為 "immust" 的 MySQL 數據庫的連接。如果連接成功，則連接對象將存儲在 $conn 變數中，以便後續的數據庫操作中使用
    #mysqli_query() 從資料庫查詢資料 //mysqli_query() 函數來向 MySQL 數據庫發送一個查詢
    $result=mysqli_query($conn, "select * from user"); //從名為 "user" 的表中選擇所有的列和行
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來 //從查詢結果集中逐行獲取數據的函數
    $row=mysqli_fetch_array($result); //使用 mysqli_fetch_array() 函數來從查詢結果集中獲取下一行數據，並將其存儲在 $row 變數中
    echo $row["id"] . " " . $row["pwd"]."<br>"; //將從數據庫中獲取的 "id" 和 "pwd" 兩個欄位的值輸出到瀏覽器上，並在每行後面插入一個斷行，以便後續的內容從下一行開始顯示
    $row=mysqli_fetch_array($result); //使用 mysqli_fetch_array() 函數來從查詢結果集中獲取下一行數據，並將其存儲在 $row 變數中
    echo $row["id"] . " " . $row["pwd"]; //將從數據庫中獲取的 "id" 和 "pwd" 兩個欄位的值連接起來並輸出到瀏覽器上，中間以一個空格分隔
?>
