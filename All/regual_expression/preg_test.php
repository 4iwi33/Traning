<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|</title>
</head>

<body>
    <?php
    $str = "mest hello string test motherfucker test test";
    //символ"|" он же или значение запсывается в скобках

    // preg_match('/(test|mest)/', $str, $match);  //Первый вариант использования |или

    preg_match('/(t|m)est/', $str, $match);  //Второй вариант использования |или
    var_dump($match);
    echo "<hr>";
    print_r($match);
    ?>
</body>

</html>