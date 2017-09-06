<?php  // 多維陣列
    $a[0] = array(1,2,3);
    $a[1] = array(4,5);
    $a[2] = array(array(11,12),array(100,200));

    foreach ($a as $v1){
        if (gettype ($vi) =='array'){
            foreach ($v1 as $v2){
                if(gettype($v2)=='array'){
                    foreach ($v2 as $v3){
                        echo "3:{$v3}<br>";
                    }
                    echo '<hr>';
                }else{
                    echo "2:{$v2}<br>";
                }
            }
            echo '<hr>';
        }else{
            echo "{$v1}"
        }
    }

