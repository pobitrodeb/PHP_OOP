<?php 

class ClassSix{
    public $name; 
}

class ClassXi{
    public $roll; 
}

$classSix = new ClassSix(); 
$classXi  = new ClassXi(); 

// Check by instanceof KyeWord 
var_dump($classSix instanceof ClassXi); // jodi ClassXi er instant of hoy tahole true retun korbe, flase 
var_dump($classXi instanceof ClassXi);