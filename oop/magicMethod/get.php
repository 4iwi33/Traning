<?php

class GetSet
{
    private $number = 1; // свойство класса

    public function __get($name) //функция, магический метод __get, один аргумент name 
    {
        echo "Y Get {$name}";
    }

    public function __set($name, $value) // функция, __set, в ней два аргумета name и value
    {
        echo "Y Set {$name} to {$value}";
    }
}

$obj = new GetSet(); // создали экземпляр класса
echo $obj->$number; // выводим экзкмпляр класса
echo $obj->$number = 689; // меняем значение
/*
Метод __set() будет выполнен при записи данных в недоступные
(защищенные или приватные) или несуществующие свойства.

Метод __get() будет выполнен при чтении данных из недоступных 
(защищенных или приватных) или несуществующих свойств.
*/
