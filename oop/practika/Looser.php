<?php

// класс с уже заданными значениями

class Looser
{
    public $name = "Nick\n";
    public $password = "333\n";
    public $email = "@mail.ru\n";
    public $city = "Ass\n";

    function info()
    {
        return
            "{$this->name}" .
            "{$this->password}" .
            "{$this->email}" .
            "{$this->city}";
    }
}

$obj = new Looser();
echo $obj->info();
