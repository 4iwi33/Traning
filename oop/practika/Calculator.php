<?php

class Calculator
{
    public $a = 2;
    public $b = 4;
    
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        echo $this->a + $this->b;
    }
}

$calc = new Calculator();
$cal->sum();

// $a = 2;
// $b = 3;
// $c = $a + $b;

// echo $c;