<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send</title>
</head>

<body>
    <?php
    //isset — Определяет, была ли установлена переменная значением, отличным от NULL
    if (isset($_POST["send"])) {
        // print_r($_POST); // выодим глоб_массив на экран
        $name = $_POST["name"];//и выводим на экран 

        echo "Hello" . " " . $name;
    }
    ?>
</body>

</html>