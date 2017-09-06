<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>字串的位元組數</title>
</head>
<body>
<?php
// 傳回字串$string中，註標為$index的字元
function charAt($string, $index){
	if($index < mb_strlen($string)){
		return mb_substr($string, $index, 1);
	}
	else{
		return -1;
	}
}
?>
<?php
/* ===================================
   strlen() 傳回字串中的位元組數而非字元數 
*/
$str  = "徵1234";
$length = strlen($str);
echo "$str的的位元組數: strlen($str)--> $length <br>";


/* 
 ===================================
* ======================================
 * mb_strlen( string, string encoding )
 * mb_strlen() 函式的第一個參數 string 是要計算長度的字串，必要項目，
 * 而第二個參數 string encoding 則是要判斷的編碼，
 * 可以自定，例如萬國碼就用 utf-8，以下舉個簡單的範例。
 */
$length = mb_strlen($str);
echo "$str的長度的字串(字元數): mb_strlen($str)--> $length <br>" ;
//===================

// 一次印出一個字元
echo $length . "<br>" ;
for($n=0; $n<mb_strlen($str);$n++){
	echo mb_substr($str, $n, 1) . "<br>";
}
/*
big5 轉 utf-8
PHP 程式碼:
*/
$str=iconv("big5","UTF-8",$str); 

//utf-8 轉 big5
//PHP 程式碼:
$str=iconv("UTF-8","big5",$str); 

?>


</body>
</html>