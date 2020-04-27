<?php

// нтерфейс это шаблоны ,  
interface FirstInterface
{
    public function getName();
}

interface SecondInterface
{
    public function getStatus();
}

class Test implements FirstInterface, SecondInterface  // класс Test имплементирует класс FirstInterface 
{
    public $name = "Alex";
    public $status = "Admin";

    public function getName()
    {
        echo $this->name;
    }

    public function getStatus()
    {
        echo $this->status;
    }
}
