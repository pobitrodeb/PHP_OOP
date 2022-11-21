<?php 

class User 
{
    public $name, $address; 

    public function set($name, $address)
    {
        $this->name         = $name; 
        $this->address      = $address; 
    }

    public function disply()
    {
        echo "Name is : {$this->name}". '<br/>';
        echo "Address : {$this->address}". '<br/>';
    }
}

class Modarator extends User 
{
    public function getModarator()
    {
        echo 'modarator information'. '<br/>';
        parent::disply(); //It's call function overloading
    }
}

$modarator = new Modarator(); 
echo $modarator->getModarator();
$modarator->set('pobitro', 'dhaka');
$modarator->disply();