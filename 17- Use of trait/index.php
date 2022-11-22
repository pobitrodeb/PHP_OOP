<?php 
trait User {                    // trait er pore trait er nmae dite hoy , eikhane User ekta trait 

    public function getUser()
    {
      echo "This is User Trait"; 
    }
}

trait SuperAdmin {
    public function getSuperAdmin()
    {
      echo "This is Super User Trait"; 
    }
}

class Modarator{
    use User;     // eikhane User = bolte trait ke call kora hoyche. 
    use SuperAdmin;     // eikhane SuperAdmin = bolte trait ke call kora hoyche. 
    public function getModarator()
    {
        echo "This is Modarator Trait";
    }
}


$user = new Modarator();  // Modarator class er object toyri kora hoyeche 
$user->getUser();        // jehetou modarator class e User Trait er sob kichu ache sejonno getUer funcation call korlei result paowa jaabe
echo '<br/>';
$user->getSuperAdmin(); 
echo '<br/>';
$user->getModarator();

// Summary : 
 
// Jodi amara class ke extend kortam tahole ek class er moddhe duita ba multi class er function ke 
// catch korte partam na . jemon ta kora hoyche , Modarator class er modddhe . Use diye duita trait ke dhora hoyeche . 
// ei jonno trait bebohar kora hoy . 
