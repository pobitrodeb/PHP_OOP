<?php 

class Product {

    public static $productName = 'HXMako Cycle 2018'; 
}

echo 'The Cycle Name is ; ' .  Product::$productName;

echo '<br/>'; 
Product::$productName = 'TaxiTO Cycle 24512'; 
echo 'The Update Cycle Name is : ' . Product::$productName;