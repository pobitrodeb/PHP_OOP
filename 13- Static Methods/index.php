<?php 

/// Basic Declear Funcation 
class User {

    public static function show()
    {
        echo 'This is static show function'; 
    }
}

$user = new User(); 
$user->show();

// NOw We are see Static Properties and Method 

class Product {
    public static $name = 'NO, Declear Object . This call by Self'; 

    public static function getProduct(){
        echo  self::$name;  // if your proferties are static than you call self , otherwise you declear new objecth than call this properties
    }
}

echo '<br/>';
Product::getProduct();