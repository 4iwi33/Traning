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
        $information = "{$this->name}". "{$this->pass}". "{$this->email}". "{$this->city}";
        return $information;
    }
}

$obj = new User("Ivan", "54321", "alex@mail.com", "Moscow");
// echo $obj->getInfo();

// "extends" - наследование
class Moderator extends User // класс Moderator наследует класс User
{
    public $info;
    public $rights;

    
        function __construct($name, $pass, $email, $city, $info, $rights)
    {
        parent::__construct($name, $pass, $email, $city);
        $this->info = $info;
        $this->rights = $rights;        
    }

    function getInfo()
    {
        $information = parent::getInfo();
        $information .= "{$this->info}". "{$this->rights}";
        return $information;
    }
}

$moder = new Moderator("Alex", "12345", "alex@mail.com", "Minsk", "Mod", "True");
echo $moder->getInfo();
