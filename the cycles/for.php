<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for</title>
</head>

<body>
<!-- надо указать 3 параметра :
1-выполняется только 1 раз в начале условия 
она задаёт значение переменной которая будет использоваться в условии
2-будет = истине то условие будет работать
3-если 2 выражения отсутствует то цикл будет выполнятся вечно -->
    <?php
    //параметры:
    //($i=0)-значение по умолчанию
    //($i <= 10)-условие
    //($i++)-увеличевание на себя

    for ($i = 0; $i <= 10; $i++) {
        echo "$i <br>";
    }    
    ?>
</body>

</html>