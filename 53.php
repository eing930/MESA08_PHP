<?php
    $mysqli1 = new mysqli(
        'localhost',
        'root',
        'root',
        'iii');
    if($mysqli1->connect_error){
        die($mysqli->connect_error);
    }

    $ret = $mysqli1->query("CREATE DATABASE test4");
    var_dump($ret);

