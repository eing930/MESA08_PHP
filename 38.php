<?php
//1.創畫布(1。白 2。計有圖)
$imgS = imagecreatefromJPEG("./imgs/ff.jpg");
$imgT = ImageCreate(200,200);
//2。開始畫
$imgSW = imagesx($imgS);$imgSH = imagesy($imgS);
if ($imgSH>$imgSW){
    $imgTH
}
//echo "{$imgSW} x {$imgSH}";
//3。記憶體->輸出 (1。畫面 2。檔案)

header("Content-type:image/jpeg");
imagejpeng($img);

//4。清除
imagedestroy($imgS);
imagedestroy($imgT);
