<?php

class GetSet
{
    private $number = 1;

    public function __get($name)
    {
        echo "Y Get {$name}";
    }

    public function __set($name, $value)
    {
        echo "Y Set {$name} to {$value}";
    }
}

$obj = new GetSet();
echo $obj->$number;
echo $obj->$number = 689;