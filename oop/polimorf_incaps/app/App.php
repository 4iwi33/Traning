<?php

namespace app;

use app\App as IDo; // использовать класс App как BaseApp

class App extends IDo // наследование от класса-> \liw\core\App
{
    public function __construct()
    {
        parent::__construct(); // после parent пишем тот метод который хотим вызвать
        echo "выполнился метод в дочернем классе";
    }
}
