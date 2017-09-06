<?php
    function sayYa($count,$name = 'world'){
        for($i=0;$i<$count;$i++) {
            echo "YA, {$name}<br>";
        }
    }
    function fx($x){
        return 2 * $x + 1 ;
    }
    function test(){
        for($i=0;$i<func_num_args();$i++)
        echo func_get_arg($i).'<br>';

    }
    test(1,2,3,4,5,5,3,6,'wwwww',true);
