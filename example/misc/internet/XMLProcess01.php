<!DOCTYPE html>
<html>
<head>
<meta charset='utf8	'>
<title>Insert title here</title>
</head>
<body>

<?php 
header("content-Type: text/html; charset=Utf-8");

$file = "d:\\aaa.txt";
// 讀入網頁的內容
$content = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/activity_C_f.xml");
//將網頁內容存檔
file_put_contents($file, $content);
// SimpleXMLElement類別
//   Represents an element in an XML document.
$xml = new SimpleXMLElement($content);
// 如果由檔案讀入xml文件:
// $xml=simplexml_load_file($file);


$name = $xml->getName();
echo "---------------- 印出此元素的名字 ---------------------<br>";
echo "xml元素的的名稱=$name<br>";
echo "---------------- 印出元素的所有屬性 ---------------------<br>";
foreach($xml->attributes() as $a => $b) {
	echo "屬性: $a 對應的值= $b <br>";
}
echo "---------------- 印出元素所有的子元素的名字 ---------------------<br>";
foreach($xml->children() as $secondGen) {
	echo "小孩元素的名字= ". $secondGen->getName() ."<br>";
}
echo "---------------- 印出元素updatetime屬性的值---------------------<br>";
$attrs = $xml->attributes();
echo "ut=" . $attrs['updatetime'] . "<br>";
echo "---------------- 將字串轉換為時間(time)---------------------<br>";
$time = strtotime($attrs['updatetime']);
echo $time . "<br>";

echo "---------------- 印出元素所有的孫元素的名字 ---------------------<br>";
// foreach ($xml->children() as $second_gen) {
// 	foreach ($second_gen->children() as $third_gen) {
// 	   echo $third_gen->getName() . "<br>";
// 	}
// }
?>
</body>
</html>
