<?php
class AddClass { 
  
    public $a, $b, $c;
    function addFuncation()
    {
        $a = 10; 
        $b = 25; 
        $c = $a + $b; 
        echo $c; 
    }
}

$objet = new AddClass();  // Define Object 
echo $objet->addFuncation(); // call funcation 