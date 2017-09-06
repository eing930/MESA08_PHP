<?php

  $mysqli = @new mysqli(
      'localhost',
      'root',
       'root',
       'iii');

    $sql = "INSERT INTO member(account,passwd,realname)".
        " VALUES ('bard','123','BRAD')";
    $mysqli->query($sql);
    //$sql ="UPDATE member SET account='tony',passwd='321' WHERE id=2:";
      $sql = "SELECT * FROM member";

    $result=  $mysqli->query($sql);
    $data = $result->fetch_array(){
   while($data = $result->fetch_assoc());
        echo "{$data['id']}:{$data['account']}:{$date['realname']}<br>";
   }
    echo '<hr>';

