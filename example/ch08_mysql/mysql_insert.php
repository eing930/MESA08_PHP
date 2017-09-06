<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>執行 SELECT 敘述</title>
  </head>
  <body>
    <?php
      //error_reporting(E_ERROR | E_PARSE);
    
      $conn = mysql_connect("localhost", "root", "") 
              or  die("無法對資料庫建立連線"); 
              
      mysql_query("SET NAMES 'utf8'");
      if ( ! mysql_select_db("test") ) { // 如果無法開啟資料庫
		die("無法開啟資料庫test");    
	  }
	  $sql = "insert into `test`(`name`) values(NOW())";
	  $result = mysql_query($sql, $conn) or error_get_last();
      echo $result . "  ==>" . $sql;        
      mysql_close($conn);
    ?> 
  </body>
</html>
