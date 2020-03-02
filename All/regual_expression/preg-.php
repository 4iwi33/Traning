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
    //символ"\d" находит первую цифру 
    //символ"\d+" находит первое число
    // чтобы вывести все числа и игнорить слова напишем"preg_match_all"
    preg_match('/\d+\-?\d+/', $str, $match);
    var_dump($match);
    echo "<hr>";
    print_r($match);
    ?>
</body>

</html>