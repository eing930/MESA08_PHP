<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<title>我的第一個PHP程式</title>
</head>
    <body>
    <?php
       for($x=1; $x<=5 ; $x++){   
       echo("Hello World!, 大家好!<br>");
       echo"伺服器上的時間為" . date("Y/m/d H:i:s") . "<br>";
	  };
	   echo("<hr>");
	   $e="ghrty";
	   echo("WTF".$e);
	   
	   echo("<hr>");
	   
	   $s = '123'.'456';
	   echo's=$s<br>';
	   echo"s=$s<br>";
	   
	   echo("<hr>");
	   
	   $user="Mary";
	   echo("Hello, $user");
	   echo("<br>"); 
	   echo('Hello, $user');
	   echo("<br>");
	   echo("There are many {$user}s in my school.<br>");
	   
	   echo("<hr>");
	   
	   for($a=2; $a<10 ; $a++){
	   	for($b=1 ; $b<10 ; $b++){
	   	  echo $a ."X". $b ."=". $a*$b ." " ;	
	   	};
	   	 echo("<br>");
	   };
    ?>
    </body>
</html>