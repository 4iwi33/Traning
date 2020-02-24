<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>

    <?php
    //hello = привет
    //ключ = значение
    $arr = array("hello" => "привет", "world" => "мир");
    $arr["me"] = "мне";
    $arr["age"] = 20; //добавим новое зачение с ключём "age"
    $arr["age"] = 23;//так же можно заменять элементы указав ключ

    //теперь выводим значение через ключ
    echo $arr["hello"] . " " . $arr["world"] . " " .  $arr["me"] .  " " . $arr["age"]; // " " так можно ставить пробел


    //  print_r($arr);




    ?>
</body>

</html>