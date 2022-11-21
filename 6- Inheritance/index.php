<?php 

class Bike{
    public $brandName, $cyecleName; 

    function MotorCycle()
    {
        echo 'Honda is best of one'; 
    }
}

class Bus extends Bike{    // extend means Bike class er sob kichu Bus class pabe 

}

class Cycle extends Bike{  // extend means Bike class er sob kichu Cycle class pabe

}

$bike = new Bike(); 
$bike->brandName = 'Pulsure'; 
echo $bike->brandName . '<br/>'; 

// Inheritance 1
$bus = new Bus (); 
$busMotorCycle =  $bus->MotorCycle(); 
echo $busMotorCycle;

// Inheritance 2
echo '<br/>';
$cyecle = new Bike(); 
 $cyelceNameDeclear = $cyecle->cyecleName = 'Fonix'; 
echo $cyelceNameDeclear;