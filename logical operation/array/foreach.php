<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>

<body>
    <?php
    $arr = array("hello" => "привет", "world" => "мир");

    foreach ($arr as $key => $value) {    //"$arr"-назваие массива,"$key"-ключ,"$value"-значение
        echo "$key равен $value <br>"; //вывели ключ  значение
    }
    echo "<hr>";
    //теперь выведем только значение 
    foreach ($arr as $value) {
        echo "$value <br>";
    }
    ?>
</body>

</html>