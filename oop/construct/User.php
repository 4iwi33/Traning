<?php

class User
{
    // public $name;
    // public $password;
    // public $email; 
    // public $city;

    function __construct($name, $password, $email, $city, $color,$car) //сдесь аргументы конструктора
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
        $this->color = $color;
        $this->car = $car;
    }

    function getInfo()
    {
        return "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}" . "{$this->color}" . "{$this->car}";
        // возращаем наши значения
    }
}

$user1 = new User("Alex", "12345", "4iwi@mail.ru", "Moscow", "Black", "BMW");
echo $user1->getInfo(); // обращаемся к методу "getInfo" и выводим