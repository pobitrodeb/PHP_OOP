<?php 

class HeadMaster {
   function addNumber()
   {
     $x = 29; 
     $y = 43; 
     $result  = $x + $y; 
     return $result; 
   }
   function multiNumber()
   {
    $x = 29; 
     $y = 43; 
     $result  = $x * $y; 
     return $result; 
   }
}

class AssistenTeacher extends HeadMaster
{
    function subNumber()
    {
      $x = 69; 
      $y = 43; 
      $result  = $x - $y; 
      return $result; 
    }
     function modulesResult()
    {
        $x = 60; 
        $y = 25; 
        $result  = $x % $y; 
        return $result; 
    }
}

class classTeacher extends AssistenTeacher{

}


$addNumber = new HeadMaster(); 
echo $addNumber->addNumber(); 


echo '<br/>'; 
$subNummber = new AssistenTeacher(); 
echo $subNummber->subNumber();
echo '<br/>';
echo 'Extends of Head Master Class : ' . $subNummber->multiNumber();

echo '<br/>';
$classTeacher = new classTeacher(); 
echo 'Extends of Assistent Teacher Class : ' . $classTeacher->modulesResult();
echo '<br/>';
echo 'Extends of Headmaster Class : ' . $classTeacher->multiNumber();