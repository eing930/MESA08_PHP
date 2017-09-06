<?php

class Bike{
    var $color;
    private $speed = 1;

    function __construct($s = 0){
      $this->speed = $s;
    }

    function upSpeed(){
        $this ->speed = ($this->speed<1)?1:$this->speed*1.2;
    }
    function downSpeed(){
        $this ->speed = ($this->speed<1)?0:$this->speed*0.7;
    }
    function getSpeed(){
        return $this->speed;
    }
}

$myBike = new Bike;
echo "myBike:{$myBike->getSpeed()}<br>";
$urBike = new Bike;
echo "urBike:{$urBike->getSpeed()}<br>";

$urBike -> upSpeed();
$urBike -> upSpeed();
$urBike -> upSpeed();




//$myBike = new Bike();
//$urBike = new Bike();

//$myBike->speed = 1;
//$urBike->speed = 1;

//$myBike -> upSpeed();
//$myBike -> upSpeed();
//$myBike -> upSpeed();
//$myBike -> upSpeed();








