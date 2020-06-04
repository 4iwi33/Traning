<?php

class Room
{
    public static $location = "Внутри дома"; // статическое свойство

    public static function sayWelcome() // статическй метод
    {
        echo "Hello это статческий метод";
    }
}

echo Room::$location;

echo "<br>";

Room::sayWelcome();

$myRoom = new Room(); // создали объект

echo "<br>";
echo "<br>";

echo $myRoom::$location; // обратимся к статитескому свойтсву 

echo "<br>";

$myRoom::sayWelcome();
