<?php

class User 
{
    private $name;
    private $city;
    private $id;

    function __construct($name, $city )
    {
        $this->name = $name;
        $this->city = $city;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    
    public function __clone()
    {
        $this->id = 0;
    }
}

$user1 = new User("Alex ", "Minsk");
$user1->setId(5662);
$user2 = clone $user1;
print_r($user1);