<?php

class User
{
    public function __clone()
    {
        echo "Cloned";
    }
}

$obj = new User;
$obj2 = clone $obj;
