<?php

class Lox
{
    public $name;
    public $password;
    public $email;
    public $city;

    public function getName() // метод
    {
        echo $this->name . "\n";
        $this->test();
    }

    public function test() // метод
    {
        echo "Test";
    }
}
