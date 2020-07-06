<?php

class User
{
    public $name;
    public $password;
    public $email;
    public $city;

    function __construct($name, $password, $email, $city, $color, $car) //сдесь аргументы конструктора
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
        // возращаем наши значения
        return
            "{$this->name}\n" .
            "{$this->password}\n" .
            "{$this->email}\n" .
            "{$this->city}\n" .
            "{$this->color}\n" .
            "{$this->car}\n";
    }
}



$user1 = new User("Alex", "12345", "4iwi@mail.ru", "Moscow", "Black", "BMW");
echo $user1->getInfo(); // обращаемся к методу "getInfo" и выводим
