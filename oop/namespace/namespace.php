<?php
require_once 'index.php'; // вкл наш файл

$obj = new \Home\User("Alex ", "123456 ", "alex@mail.com ", "Moscow "); //создали экземпляр класса
//  Home - namespace;  User - class
echo $obj->getInfo(); // выводим
