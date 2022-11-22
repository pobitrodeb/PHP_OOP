<?php 
namespace App; 

class User{
    public $name = 'Pobitro Debnath', $email = 'pobitrodn@gmail.com';
    public function getUser()
    {
      echo "This User Name is : {$this->name}" . '<br/>';
      echo "The Email Address is : {$this->email}" . '<br/>';
    }

}