<!DOCTYPE html>
<html>
<head>
<meta charset='utf8	'>
<title>Insert title here</title>
</head>
<body>

<?php 
header("content-Type: text/html; charset=Utf-8");
// 讀入網頁的內容
$content = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/activity_C_f.xml");

$xml = new SimpleXMLElement($content);

echo "---------------- 印出元素的所有屬性 ---------------------<br>";
foreach($xml->attributes() as $a => $b) {
	echo "屬性: $a 對應的值= $b <br>";
}
echo "---------------- 印出元素updatetime屬性的值---------------------<br>";
$attrs = $xml->attributes();
echo "ut=" . $attrs['updatetime'] . "<br>";
echo "---------------- 將字串轉換為時間(time)---------------------<br>";
$time = strtotime($attrs['updatetime']);
echo $time . "<br>";

?>
</body>
</html>
