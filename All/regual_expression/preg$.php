<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$</title>
</head>

<body>
    <?php
    $str = "test string end";
    //проверим заканчивается ли строчка со слова с символом"$" 
    preg_match('/end$/', $str, $match);
    var_dump($match);
    ?>
</body>

</html>