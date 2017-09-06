<?php
    $upload = $_FILES['upload'];

    foreach ($upload['error']as $k=>$v){
        if($v==0){
            copy("{$uploadt['tmp_name'][$k]}",",/upload/{$upload['name'][$k]}");
        }
    }