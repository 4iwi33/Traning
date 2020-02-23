<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>else</title>
</head>

<body>
    <?php
    $a = 50;

    if ($a < 30) {
        echo "$a меньше 30"; //не выводится потомучто false
    } elseif ($a >= 50) {
        echo "$a больше или равно 50";// true
    } else {
        echo "$a больше 30"; //не выводится потомучто false
    }


    ?>
</body>

</html>