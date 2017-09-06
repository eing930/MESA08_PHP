<?php//條件 不能超過10 ，第一個字母一定是英文，第二碼一定是1或2，後8碼一定是1~9

    if (isset($_GET['twid'])){
        $twid = $_GET['twid'];

        if(preg_match('/^[a-z][1-2][0-9]{8}$/',$twid)){
            $c1 = $twid[0];
            $alpha = 'ABCDEFGHJKLMNPORSTUVXYWZIO';
            $n12 = strpos($alpha,$c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = $twid[1];
            $n4 = $twid[2];
            $n5 = $twid[3];
            $n6 = $twid[4];
            $n7 = $twid[5];
            $n8 = $twid[6];
            $n9 = $twid[7];
            $n10 = $twid[8];
            $n11 = $twid[9];
            $sum = $n1 *1






        }else{
            echo 'xx',

        }





    }
?>
<form>
    <input name="twid"/>
    <input type="submit" value="check"/>
</form>