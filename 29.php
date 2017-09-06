<?php
    $fp = fopen("./dir1/file2",'a+');
    fwrite($fp,"hello,world\nok123\nbrad");
    fclose($fp);