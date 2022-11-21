<?php 

class Student{

    public $name, $roll, $regi; // Delcear Public Propertices 
}
$student = new Student(); 
$student->name = 'Pobitro Debnath'; 
$student->roll = '302109'; 
$student->regi = '212564'; 
echo 'Student Name : ' .$student->name .'<br/>';
echo 'Student Roll : ' .$student->roll .'<br/>';
echo 'Student Regi : ' .$student->regi .'<br/>';

// Class With Function Parametters 

class Operation {
    public $first, $secound, $result;
    function addFuncation($first, $secound)
    {
            $this->first        = $first;
            $this->secound      = $secound;
            $this->result       = $this->first + $this->secound;
            return $this->result;
        
    }
}

$object = new Operation(); 
$object->addFuncation(55,45);
echo 'The Result is ' . $object->result;
