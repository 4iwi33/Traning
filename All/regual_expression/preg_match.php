<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preg</title>
</head>

<body>

    <?php
    $str = 'test string test test test';
    //preg_match — Выполняет проверку на соответствие регулярному выражению
    //            ('/что ищем/'),($где ищем)
    if (preg_match('/test/', $str)) { //проверяем существование и выводим
        echo "Success";
    } else {
        echo "False";
    }
    ?>

</body>

</html>