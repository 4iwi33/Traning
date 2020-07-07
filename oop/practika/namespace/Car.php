<?php

namespace Bmw;

class Car
{
    public function __construct($brand, $model, $year, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    function CarInfo()
    {
        $info = "{$this->brand}" . "{$this->model}" . "{$this->year}" . "{$this->color}";
        return $info;
    }
}

// $object = new Car("BMW\n", "5-series\n", "2020\n", "Red\n");
// $object->CarInfo();
