<?php
$json = file_get_contents('http://localhost/69.php');
$root = json_decode($json);

var_dump($root);