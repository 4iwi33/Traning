<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>^</title>
</head>

<body>

    <?php
    //preg_match — Выполняет проверку на соответствие регулярному выражению
    $str = 'test string';
    //проверим наинается ли строчка со слова с символом"^" 
    preg_match('/^test/', $str, $match);
    var_dump($match);

    ?>

</body>

</html>