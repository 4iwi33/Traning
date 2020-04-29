<?php
require_once 'index.php';

$obj = new \Home\User("Alex ", "123456 ", "alex@mail.com ", "Moscow ");
echo $obj->getInfo();
