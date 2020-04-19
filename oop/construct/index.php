<?php

class User
{
    // public $name;
    // public $password;
    // public $email; 
    // public $city;

    function __construct($name,$password,$email,$city) //сдесь аргументы конструктора
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo()
    {
        return "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}"; 
        // возращаем наши значения
    }
}

$user1 = new User("Alex", "12345", "4iwi@mail.ru", "Moscow");
echo $user1->getInfo(); // обращаемся к методу "getInfo" и выводим