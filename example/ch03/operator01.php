<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <title>ch03/operator01.php</title>
  </head>
  <body> 
    <?php              
	  $x = 20 ; 
	  $y = 30 ;
      echo '($x == $y) --->' . ($x == $y ? "成立": "不成立") ;	// 印出 1
      echo   "<br>" ;	  	  	  	  
	  $x = 20 ; 
	  $y = 30 ;
      echo '($x > $y) --->' . ($x > $y ? "成立": "不成立") ;	// 印出 1
      echo   "<br>" ;	  	  	  	  	  
      echo '($x != $y) --->' . ($x != $y ? "成立": "不成立") ;	// 印出 1
      echo   "<br>" ;	
    ?>

</body> 
</html>