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
    use Hello, World;
}

$obj = new myHelloWorld();
$obj->sayHello();
$obj->sayWorld();
