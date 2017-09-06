<?php
//$fp = fopen("./dir1/tree.csv", 'r');
$fp = fopen("http://data.tycg.gov.tw/opendata/datalist/datasetMeta/resource?oid=b12432b0-a3cd-46e9-85d3-c56ca2853f68&rid=c332e0fb-236c-4440-b1a7-8dbec278bb2a", 'r');
$line = fgets($fp);
$line = fgets($fp);
$line = iconv("BIG5","UTF-8",$line);
$row = explode(',',$line);
foreach ($row as $v){
    echo "{$v}<br>";
}
