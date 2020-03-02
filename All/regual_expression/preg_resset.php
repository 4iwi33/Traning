<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preg_m_all</title>
</head>

<body>
    <?php
    $str = "test 46 string mest 694 test test 5863";
    //символ"\d" находит первую цифру 
    //символ"\d+" находит первое число
    // чтобы вывести все числа и игнорить слова напишем"preg_match_all"
    preg_match_all('/\d+/', $str, $match);
    var_dump($match);
    echo "<hr>";
    print_r($match);
    echo "<hr>";
    echo implode('', reset($match));//вывели все числа
    ?>
</body>

</html>