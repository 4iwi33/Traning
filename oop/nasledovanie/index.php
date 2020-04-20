<?php

class User 
{
    function __construct($name, $pass, $email, $city)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo()
    {
        return "{$this->name}". "{$this->pass}". "{$this->email}". "{$this->city}";
    }
}

$obj = new User("Ivan", "54321", "alex@mail.com", "Moscow");
echo $obj->getInfo();

// "extends" - наследование
class Moderator extends User // класс Moderator наследует класс User
{
    public $info;
    public $rights;
}

$moder = new Moderator("Alex", "12345", "alex@mail.com", "Minsk");
echo $moder->getInfo();
