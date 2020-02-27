<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get</title>
</head>

<body>
    <?php
    // print_r($_GET); //глобальный массив get,в него сохраняется вся инфа при нажатии на кнопку
    // соответсвенно "print_r" нам показывает всё что есть в этом массиве
    $name = $_GET["name"]; // обращаемся к элементу массива
    echo "Hello" . " " . $name;//и выводим на экран 
    //в итоге мыполучли значение "name" из глоб_массива"$_GET" и вывели его на экран
    ?>
    <form action="zend.php" method="get">
        <p>Name:<br><input type="text" name="name"></p>
        <input type="submit" name="send" value="отправить">
    </form>
</body>

</html>