<?php

class MyConstruct
{
    public $my;
    public $name;
    public $isNick;
    // public $a;
    public $b;
    public $c;

    function __construct($my, $name, $isNick)
    {
        $this->my = $my;
        $this->name = $name;
        $this->isNick = $isNick;
    }

    function info()
    {
        return "{$this->my}" . "{$this->name}" . "{$this->isNick}";
    }
}

$announce = new MyConstruct("my", " name", " isNick");
echo $announce->info();
