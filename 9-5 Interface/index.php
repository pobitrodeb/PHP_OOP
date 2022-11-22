<?php 
interface UserInterface {

    public function getName();
    public function showDetail();
}

class User implements UserInterface {
    public $name = 'Pobitro Debnath'; 
    public $detail = 'Im student of Dhaka International University'; 

    public function getName()
    {
        return $this->name;
    }

    public function showDetail()
    {
        return $this->detail;
    }
}

$user = new User();
echo $user->getName();