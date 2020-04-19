<?php

class Room
{
    public static $location = 'inside home';

    public static function sayWelcom()
    {
        echo "Hello";
    }
}

echo Room::$location;

echo "<br>";

Room::sayWelcom();


