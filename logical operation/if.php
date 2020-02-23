<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if</title>
</head>

<body>
    <?php
    $a = 29;

    if ($a < 30) {
        //надпись вывелась потомучто значение true 29 меньше 30 
        echo "если а < 30 то мы увидем эту надпись";
    }

    //а тут значение не выведтся потомучто значение false 31 болше 30
    $b = 31;

    if ($b < 30) {
        echo "ничего не выводится";
    }
    ?>
</body>

</html>