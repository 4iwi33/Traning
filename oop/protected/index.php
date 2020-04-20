<?php

class Test 
{
    protected $info;
}

class Test2 extends Test 
{
    public function test()
    {
        $this->info = "info";
        echo $this->info;
    }
}

$test2 = new Test2();
$test2->test();
$test2->info ="information";