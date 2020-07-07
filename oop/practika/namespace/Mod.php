<?php

require 'Car.php';

use \Bmw\Car;

class Mod extends Car
{
    public $volume;
    public $hp;

    function __construct($brand, $model, $year, $color, $volume, $hp)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->volume = $volume;
        $this->hp = $hp;
    }

    function CarInfo()
    {
        $info = parent::CarInfo();
        $info .= "{$this->volume}" . "{$this->hp}";
        return $info;
    }
}

// $objectMod = new Mod("BMW\n", "5-series\n", "2020\n", "Red\n", "4.4\n", "617h.p\n");
// echo $objectMod->CarInfo();
