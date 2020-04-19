<?php

class Des
{
    function __construct()
    {
        print "Конструктор";
        $this->name = "Des";
    }

    function __destruct()
    {
        print "Уничтожение". $this->name;
    }
}

$obj = new Des();