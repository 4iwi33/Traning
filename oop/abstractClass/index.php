<?php

abstract class User
{
    public $name;
    public $status;

    abstract public function getStatus();
}

class Admen extends User
{
    public function getStatus()
    {
        echo "Admen";
    }
}

$user1 = new Admen;
$user1->getStatus();
