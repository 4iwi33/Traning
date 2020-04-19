<?php
 // self - используется для внутреннего обращения класса

 class Lox
{
    private static $name;
    
    public static function setName($name1)
    {
        self::$name = $name1; //передаём значения от $name к $name1
    }

    public static function getName()
    {
        return self::$name;
    }
}

Lox::setName("Ivan"); //обращаеемся от класса "Lox" к методу "setName" 
echo Lox::getName(); // выводим класс "Lox" и обращаемся к функции "getName"