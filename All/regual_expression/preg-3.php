<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>\-{2,}</title>
</head>

<body>
    <?php
    $str = "54657448---9807969";
    //символ"\d+" находит первое число
    //символ"\-" означает символьный интервал
    //символ"\-{2,}" находит два и более символов


    preg_match('/\d+\-{2,}\d+/', $str, $match);
    // 
    var_dump($match);
    echo "<hr>";
    print_r($match);
    ?>
</body>

</html>