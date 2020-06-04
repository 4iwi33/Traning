<?php

class Room   // класс Room
{
    public static $location = "Внутри дома"; // публичное статическое свойство $location
    // public static $loc = "Bro ";

    public static function sayWelcome() // вызываем статическй метод
    {
        echo "Hello это статческий метод";
    }

    // public static function sayHolla()
    // {
    //     echo "Holla";
    // }
}

// echo Room::$loc;

// Room::sayHolla();
// $myLoc = new Room();
// echo $myLoc::$loc;
// $myLoc::sayHolla();

// echo "<br>";

// обращаемся к свойству 
echo Room::$location; // название класса(Room) и название свойства($location)

echo "<br>";

Room::sayWelcome();

$myRoom = new Room(); // создали объект

echo "<br>";
echo "<br>";

echo $myRoom::$location; // обратимся к статитескому свойтсву 

echo "<br>";

$myRoom::sayWelcome(); // обратимся к статичекому методу
