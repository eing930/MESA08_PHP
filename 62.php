<?php
    $mysqli = new mysqli('localhost','root','root','iii');
    $account =$_GET['account'];
    $sql = "SELECT account FROM member WHERE account='{$account}'";
    $mysqli->query($qul);
    echo