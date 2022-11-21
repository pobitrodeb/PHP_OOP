<?php 

class Product{
    public $name, $price, $product, $getProductD, $prouductName; 

    function getProductName()
    {
        return $this->name; 
    }

    function getProductPrice()
    {
        return $this->price; 
    }

}

$product = new Product(); 

$product->name = 'T-shirt';

echo $product->getProductName();

