<?php 
class Book {
    public $bookName; 

    function bookName()
    {
        echo "This book name is : {$this->bookName}"; 
    }
 }

 $book = new Book(); 
 $book->bookName = 'PHP Web Programing'; 
 echo $book->bookName;