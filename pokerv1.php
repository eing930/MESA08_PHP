<?php
    //1.洗牌
    for ($i=0;$i<52;$i++){
        $temp = rand(0,51);
        //檢查機制
        $isRepeat = false;
        for ($j=0 ; $j<$i;$j++){
            if ($pokear[$j]==$temp){
                // 重複ㄌ
                $isRepeat = true;
                break;
            }
        }
        if($isRepeat){
            $i --;
            continue;
        }else{
            $pokear[$i] = $temp;
        }
        echo "{$temp}<br>";
    }
    //2.發牌 ＝> 4
    //3.攤牌（理牌）