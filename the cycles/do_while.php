<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>do_while</title>
</head>

<body>
    <!-- работает также как и while только истинность проверяется в конце цикла -->
    <p>Exc1:</p>
    <?php
    $i = 1;
    //1.часть кода в "do" обрабатывается первой
    //2.а потом обрабатывается условие 
    do {
        echo "$i";
        $i++;   //если условие false , то выводится "do" и цикл завершается            
    } while ($i <= 10); //сдесь мы пишем наше условие
    echo "<hr>";
    ?>


    <p>Exc2:</p>
    <?php
    $a = 0;
    do {
        $a++; // выводит 1
    } while ($a > 10); // 1 не больше 10 поэтому это условие не выводится
    echo $a;
    ?>
</body>

</html>