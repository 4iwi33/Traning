<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-</title>
</head>

<body>
    <?php
    $str = "54657448-9807969";
    //символ"\d+" находит первое число
    //символ"\-" означает символьный интервал
    //символ"?" - может встречаться 0 или 1 раз
    // добавляя к символу "\-" знак "?" мы экранируем спецсимвол чтобы он не учитывался как 
    // знак дефис или минус
    preg_match('/\d+\-?\d+/', $str, $match);
    // 
    var_dump($match);
    echo "<hr>";
    print_r($match);
    ?>
</body>

</html>