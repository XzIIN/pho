<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) //如果從 POST 請求中獲取的 "id" 參數的值等於 "john"，且 "pwd" 參數的值等於 "john1234"，則執行下一段程式碼
        echo "登入成功";
    else
        echo "登入失敗";
?>
