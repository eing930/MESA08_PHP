<?php
//他是一種型態 call array function

    $a = array(1,2,3,4,5,6,7);
        echo count($a);

        echo '<hr/>';
        //2
    $b[0] = 12;
    $b[7] = 12.3;
    $b[4] = 'brad';
    echo gettype($b).':'.count($b);

    echo '<hr/>';
    //3
    $c[] = 12;
    $c[] = 12.123;
    echo gettype ($c) . ':'.count($c);

    echo '<hr/>';
    //4
    $d['name'] = 'brad';
    $d['gender'] = false;
    $d['age'] = 51;
    echo gettype($d). '.'. count($d);

    echo '<hr/>';
    $ary = array(1,2);
    $ary[] = '1,2,3'; // 1,2,123
    $ary[] = 12.3; // 0=>1,1=>2 , 2=>123,7=>12.3,
    $ary['name'] = 'bard';//0=>1,1=>2 , 2=>123,7=>12.3,'name'=>'bard'
    var_dump($ary); //是一種除錯用的

    echo '<hr/>';
    for ($i = 0; $i<count($a);$i++){
        echo "{$a[$i]}<br>";
    }

    echo '<hr/>';
    foreach($ary as $key =>$value){   //每一個質尋訪出來
        echo "{$key} -->{$value}<br>";
    }
