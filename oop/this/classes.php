<?php

class Lox
{
    public $name;
    public $password;
    public $email;
    public $city;

    public function getName()
    {
        echo $this->name;
        $this->test();
    }

    public function test()
    {
        echo "Test";
    }
}