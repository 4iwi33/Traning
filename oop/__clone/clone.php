<?php

class User
{
    public function __clone()
    {
        echo "Cloned";
    }
}

$obj = new User; // создали обЪект класса
$obj2 = clone $obj; // клонровали
