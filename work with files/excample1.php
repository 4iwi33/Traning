<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exc1</title>
</head>

<body>
    <?php
    /*Написать калькулятор, сохраняющий историю вычислений в текстовом файле.
    Пример содержимого файла:
    2*3=6
    5*5=25
    6*5=30*/
    $file = fopen("a.txt",  "a+t");
    fwrite($file, "Exc\nText\nNext");
    fclose($file);
    ?>
</body>

</html>