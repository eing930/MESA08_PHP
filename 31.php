<?php
    if(isset($_GET['filename']))
        header("Location: 30.php");

    $filename = $_GET['filename'];
    $content = $_GET['content'];

    $fp = fopen("./dir2{$filename}",'w');
    fwrite($fp,$content);
    fclose($fp);

    header("Loction:,/dir2/{$filename}");