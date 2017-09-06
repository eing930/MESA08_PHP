<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
    <?php
    utf8_decode($s);
 /*
 utf8_decode() converts characters that are 
 not in ISO-8859-1 to '?', which, for the 
 purpose of counting, is quite alright.
  */
$str  = "徵1中A";
$length = strlen(utf8_decode($str));
echo $length . "<br>" ;

	?>
	<?php
	$content = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/activity_C_f.xml");
	file_put_contents($file, $content);
//header("content-Type: text/html; charset=Utf-8");




//echo mb_convert_encoding("Hello大家好", "UTF-8", "UTF-8");




?>
	
    </body>
</html>