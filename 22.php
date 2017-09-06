<?php
    if(isset($_REQUEST['account']))
        header("Location:19.php?error=2");//header 前面不可以有空白或任何動作
    $account = $_REQUEST['account'];
    echo $account;