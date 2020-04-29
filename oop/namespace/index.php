<?php
namespace Home;
class User
{
    public $name;
    public $password;
    public $email; 
    public $city;

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