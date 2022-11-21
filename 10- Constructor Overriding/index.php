<?php

class User {

    public $name, $email; 

    public function __construct($name, $email)
    {
        $this->name     = $name; 
        $this->email    = $email; 
    }

    public function show()
    {
        echo "The User Name is : {$this->name}". '<br/>'; 
        echo "The Email Address is : {$this->email}". '<br/>'; 
    }
}

$suser = new User('Pobiro Debnath', 'pobitrodn@gmail.com'); // the function argument in this pass coz the user class define construct function 
$suser->show();