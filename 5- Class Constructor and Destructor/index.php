<?php 
class Book {
    public $bookName; 

    function __construct()
    {
       $this->bookName = 'PHP Web Programing';
    }

    function bookName()
    {
        echo "This book name is : {$this->bookName}"; 
    }

    function __destruct()
    {
        echo " '<br/>' All Work Have Been Done ";
    }
 }

 $book = new Book(); 
 echo $book->bookName; 

 