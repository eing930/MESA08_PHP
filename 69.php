<?php

$a = array(1,2,'yvonne',4,5,true);
//echo json_encode($a);
//echo'<hr>';

$b = array(1,'name'=>'yvonne',3,'stage'=> 4,5);
//echo json_encode($b);
//echo '<hr>';

class Member {
    var $name,$id;
}

class MyCart{
    var $list;
    var $member;

}

$m1 = new Member(); $m1->id = '001'; $m1->name = 'Brad';
$cart1 = new MyCart(); $cart1->member = $m1;
$cart1->list = array('p001'=>12,'p004'=>3,'p008'=>13);

$m2 = new Member(); $m2->id = '002'; $m2->name = 'ken';
$cart2 = new MyCart(); $cart2->member = $m2;
$cart2->list = array('p003'=>12,'p005'=>3,'p006'=>13);

$m3 = new Member(); $m3->id = '003'; $m3->name = 'Mary';
$cart3 = new MyCart(); $cart3->member = $m3;
$cart3->list = array('p008'=>12,'p009'=>3,'p007'=>13);

$c  = array($cart1,$cart2,$cart3);

echo json_encode($c);
//echo '<hr>';