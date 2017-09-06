<?php
    //產生謎底, 三碼不能重覆
    function createaAnswer($n){
        $poker = range(0,9);
        shuffle($poker);
        $ret ='';
        for($i=0;$i<$n;$i++){
            $ret.=$poker[$i];
        }
        return $ret;
    }
    function checkAB($a,$g0){
        $A = $B = 0;
        for($i = 0;$i<strlen($g);$i++){
            $check = $g[$i];
            if($check== $a[$i]){
                $a++
            }else if (substr_count($a,$check))
        }
    }
    if(!isset($_GET['answer'])) {
        $answer = createaAnswer(3);
       }else{
        $answer = $_GET['answer'];
    }
        echo$answer;
?>
<form method="post">
    <input name="hidden" name ="answer" value="<?php echo $answer;?>"/>
    <input name="guess"/>
    <input type="submit" value="猜"/>

</form>
<hr>