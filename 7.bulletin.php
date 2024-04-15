<?php
    error_reporting(0); //關閉錯誤報告
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立與 MySQL 數據庫的連接
    $result=mysqli_query($conn, "select * from bulletin"); //執行 SQL 查詢，從 "bulletin" 表中選擇所有的列和行
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; //輸出 HTML 表格的開始標籤和表頭
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    } //遍歷查詢結果集中的每一行，並將每一行的值輸出到 HTML 表格中
    echo "</table>" //將 HTML 表格的結束標籤輸出到瀏覽器上，以完成 HTML 表格的構建
?>
