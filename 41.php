<?php
    include 'api.php';
    session_start();
    $lottery = rand(1,49);
    $_SESSION['lottery']=$lottery;
    $lottery = 100;

    $member= new Member(001,'brad',1);
    $cart = new cart($member);
    $_SESSION['carttt']= $cart;

    $cart->addItem('p001',20);
    $cart->addItem('p002',12);
    $cart->edItem('p003',41);

    $list = $cart->getBuylist();
    echo "Member:{$member->getName()},welcom<br>{$lottery}";
    echo '<hr>';

    foreach ( $list  as $k =>$v) {
        echo "{$k}:{$v}<br>";

    }

?>
<a href="42.php">Next page</a>
