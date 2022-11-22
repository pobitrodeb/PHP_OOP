<?php 
require 'user.php';         // Eikhane User.php file er sob kichu access kora jabe 
require 'student.php';    // eikhane student.php file er sob kichu access kora jabe 

use App\User;                   // App is namespace name, User is Class name    
use Student\User as StudentUser;  // Student is namespace name, User is Class name  And StudentUser holo class catch kora jate Oi class er number er sathe confilct na hoy   

$user = new User(); 
$user->getName();

echo '<br/>';
$studentUser = new StudentUser(); 
$studentUser->getName();