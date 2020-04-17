<?php

class Room
{
    public $color = 'red';

    public function getColor() // метод  "getColor"
    {
        echo $this->color;
    }

    public function changeColor($color) // параметр color
    {
         $this->color = $color;
    }
}
