<?php 
// PUBLIC Function with Public Property 
class User 
{
    public $name, $email; 

    function getUser()
    {
        $this->name = 'Pobitro Debnath';
        echo 'The User Name is : ' . $this->name ; 
    }
}

$user = new User(); 
$user->getUser();