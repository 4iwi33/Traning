<?php

namespace app;

use liw\core\App as BaseApp; // использовать класс App как BaseApp

class App extends BaseApp // наследование от класса-> \liw\core\App
{
    public function __construct()
    {
        parent::__construct(); // после parent пишем тот метод который хотим вызвать
        echo "выполнился метод в дочернем классе";
    }
}
