<?php 

class Bike{
    public $brandName; 

    function MotorCycle()
    {
        echo 'Honda is best of one'; 
    }
}

class Bus extends Bike{    // extend means Bike class er sob kichu Bus class pabe 

}


$bike = new Bike(); 
$bike->brandName = 'Pulsure'; 
echo $bike->brandName . '<br/>'; 

// Inheritance 
$bus = new Bus (); 
$busMotorCycle =  $bus->MotorCycle(); 
echo $busMotorCycle;