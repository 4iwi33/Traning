<?php

// Трейт - это механизм обеспечения повторного использования кода в языках
//  с поддержкой только одиночного наследования, таких как PHP. 
trait Hello
{
    public function sayHello()
    {
        echo "Hello ";
    }
}

trait World
{
    public function sayWorld()
    {
        echo "World";
    }
}

class myHelloWorld
{
    use Hello, World; // тут используем наш трейт
}

$obj = new myHelloWorld();
$obj->sayHello(); // обращаемся к фукции sayHello
$obj->sayWorld(); // обращаемся к фукции sayWorld
