<?php

class Lol
{
    public static $name; // статическое свойство

    public static function hello()  // статическй метод
    {
        echo "Hello";
        return self::$name;
    }
}
Lol::$name = "Alex"; // задали свйство значение
echo Lol::$name;    //вывели
echo Lol::hello(); //обращение

//если в методе нет пееменой $this , то этот метод явл статическим