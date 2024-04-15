<?php
    session_start(); //啟動 PHP 會話
    unset($_SESSION["counter"]); //刪除會話中的 "counter" 變數
    echo "counter重置成功...."; //輸出重置成功的消息
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; //使用 meta 標籤在 2 秒後重新定向到指定的 URL

?>
