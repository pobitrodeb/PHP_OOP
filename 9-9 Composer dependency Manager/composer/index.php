<?php 
require 'vendor/autoload.php'; 


use App\Main;           // App namespace er Main Calss e call kora hoyche 
use App\Model\User;

$message = new Main(); 
$message->congratualtions();

echo '<br/>'; 
$user = new User(); 
$user->getUserName();