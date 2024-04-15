<?php
    error_reporting(0); //關閉錯誤報告
    session_start(); //啟動 PHP 會話
    if (!$_SESSION["id"]) { //檢查用戶是否已經登入
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //如果用戶未登入，輸出提示消息並在 3 秒後重新定向到登入頁面
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";  //如果用戶已登入，輸出歡迎消息以及相關連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  //建立與 MySQL 數據庫的連接
        $result=mysqli_query($conn, "select * from bulletin");  //從 "bulletin" 表中選擇所有的列和行
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>"; //輸出 HTML 表格的開始標籤和表頭
        while ($row=mysqli_fetch_array($result)){ //遍歷查詢結果集中的每一行
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> //輸出每一行的內容到 HTML 表格中
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>";
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
        }
        echo "</table>"; //輸出 HTML 表格的結束標籤
    
    }

?>
