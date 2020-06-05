<?php

// тут примеры области видимости 
class User
{   //добавим стандартные значения каждому свойству
    public $name = "Имя";
    public $password = "Пароль";
    public $email = "Емейл";
    public $city = "Город";
}

$admin = new User(); // создали экземпляр класса
$user = new User();  // создали экземрляр класса

$admin->name = "Алекс "; // так же мы можем поменять значение свойтсва
$user->name = "Олег "; // так же мы можем поменять значение свойтсва

echo $admin->name;
echo $user->name;

//добавим свойтво
$user->surname = "Иванов "; // surname прописываем без $
echo $user->surname;
