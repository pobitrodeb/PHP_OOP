<?php 
// PUBLIC Function with Public Property 
class User 
{
    public $name, $email; 

    function getUser()
    {
        $this->name = 'Pobitro Debnath';
        echo 'The User Name is : ' . $this->name ; 
        $this->getModarator();
    }

     function getModarator()   
      {
          echo '<br/>';
          echo 'This is Get Modarator Access';
      }
}

$user = new User(); 
$user->getUser();

// Privet Function with Privete Property 

class Modarator {
    private $playrName, $accessType; 

  // private function getModarator()   
   function getModarator()   
    {
        $this->playrName = 'Liton Das'; 
        echo $this->playrName;     
       
    }
}

$modarator  = new Modarator();
echo '<br/>'; 
$modarator->getModarator();