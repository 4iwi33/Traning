<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preg^</title>
</head>

<body>

    <?php
    $str = 'test string';
    // preg_match('/test/',$str);
    //preg_match — Выполняет проверку на соответствие регулярному выражению
    preg_match('/^test/', $str, $match); //проверим наинается ли строчка со слова с символом"^" 
    var_dump($match);

    ?>

</body>

</html>