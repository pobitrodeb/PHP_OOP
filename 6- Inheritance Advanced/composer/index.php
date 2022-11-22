<?php

require 'vendor/autoload.php'; 
use App\Student;



$user = new Student();  

$user->getUser(); 

echo $user->getRoll(); 
