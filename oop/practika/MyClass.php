<?php

namespace Home;

class MyClass
{
    public function my()
    {
        $this->my = 'my ';
        // echo $this->my;
        echo "Hello {$this->my}";
    }

    public function name()
    {
        $this->name = 'name';
        echo $this->name;
    }

    public function isNick()
    {
        $this->isNick = ' is Nick';
        echo $this->isNick;
    }
}

$objMy = new MyClass(); // объявили класс
$objName = new MyClass();
$objIsNick = new MyClass();

$objMy->my(); // объявили метод
$objName->name();
$objIsNick->isNick();


class B
{
    public $nickname = 'Sam';

    public function Hello()
    {
        echo " Hello {$this->nickname}";
    }
}

$objClassB = new B();
$objClassB->nickname = 'Mark';
$objClassB->Hello();

class Xamlo
{
    public function XamloFun()
    {
        $this->XamloFun = 'I am is Xamlo';
        echo $this->XamloFun;
    }
}

$xam = new Xamlo();
$xam->XamloFun();
