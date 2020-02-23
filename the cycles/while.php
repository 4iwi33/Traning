<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>while</title>
</head>

<body>
    <p>Exc1:</p>
    <?php

    $i = 1; //значение ро умолчаню 1

    while ($i <= 10) { // цикл выполняется до тех пор пока не будет ровятся 10,
        //после чего цикл завершается
        echo "$i" . "<br>";
        // $i = $i + 1; //можно записать так вместо $i++
        $i++;
    }
    echo "<hr>";
    ?>

    <p>Exc2:</p>
    <?php
    while (2 * 2 == 4) {
        echo "Эта надпись выводится"; //надпись вывелась потомучто зачение true 
        break; //ставим break наче он будет выполнятся вечно
    }

    ?>
</body>

</html>