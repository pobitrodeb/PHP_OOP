<?php 

abstract class User {
    public abstract function getName();
    public abstract function showDetail();
}

class Student extends User {
    public $name = 'Pobitro Debnath'; 
    public $detail = 'Full Stack Web Developer'; 

    public function getName()
    {
        return $this->name; 
    }
    public function showDetail()
    {
        return $this->detail; 
    }
}

$user = new Student(); 
echo $user->getName();