<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $list = array("Hello", 18, true);
    echo $list[0]; //выбираем элемент котрый хотим вывести

    echo "<br>";

    print_r($list); //в скобках указываем имя массива который хотим поверить$

    echo "<br>";

    //($i = 0)-по умолчанию
    //$i < count($list) указали условие
    for ($i = 0; $i < count($list); $i++) {
        echo "Элемент с индексом $i равен - " . $list[$i];
        echo "<br>";
    }
    ?>
</body>

</html>