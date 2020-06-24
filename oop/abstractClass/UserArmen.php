<?php

abstract class User
{
    public $name; //свойства 
    public $status; //свойства 

    abstract public function getStatus(); // метод
}

class Armen extends User
{
    public function getStatus()
    {
        echo "Armen";
    }
}

$user1 = new Armen; //создали экземпляр класса 
$user1->getStatus(); // обращаемся к методу getStatus
