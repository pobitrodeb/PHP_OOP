<?php 
namespace App; 

class Student extends User {

    public $roll = '302109'; 

    public function getRoll()
    {
      echo "The Student Roll Number : {$this->roll}";
    }

}