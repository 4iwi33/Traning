<?php
// тут примеры области видимости public private protected
class Shop
{
    private $name; //свосйство

    public function naming() // функция, метод naming
    {
        $this->name = "Apple"; // обращаемся к нашим свойствам
        echo $this->name;
    }
}

$exsemplar = new Shop(); // создали экземпляр класса
$exsemplar->naming(); // обращаемся к методу naming чтобы вывести нашу функцию
// $exsemplar->name = "Nike";

