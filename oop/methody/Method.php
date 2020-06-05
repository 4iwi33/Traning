<?php

class Method
{   //добавим стандартные значения каждому свойству
    public $name = "Имя";
    public $password = "Пароль";
    public $email = "Емейл";
    public $city = "Город";

    // public function Hello()
    // {
    //     echo "Hello {$this->name}"; // объявляем имя тут
    // }
    function getInfo()
    {
        return "{$this->name}" . "{$this->surname}";
    }
}

$admin = new Method();

$admin->name = "Alexey ";

// $admin->Hello();

$admin->surname = "Petrov";

echo "Пользователь: {$admin->getInfo()}";
