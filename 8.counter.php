<?php
    session_start(); //啟動 PHP 會話
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"]=1; //如果會話中沒有名為 "counter" 的變數，則將其設置為 1
    else
        $_SESSION["counter"]++; //如果會話中已經有名為 "counter" 的變數，則將其增加 1

    echo "counter=".$_SESSION["counter"]; //將會話中的 "counter" 變數的值輸出到瀏覽器上，以顯示用戶的訪問次數
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; //瀏覽器上輸出一個超鏈接，該超鏈接用於重置計數器。當用戶點擊這個超鏈接時，將跳轉到名為 "9.reset_counter.php" 的頁面，以重置計數器
?>
