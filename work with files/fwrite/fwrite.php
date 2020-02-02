<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fwrite</title>
</head>

<body>
    <?
    //fopen -- Открывает файл или URL
    $file = fopen("fwrite.txt", "r+t"); //$file - это функция
    fwrite($file, "example\ntext\nnext\nbull"); //$file (файл в который будем записывать) "..."(то что будем записывать)
    fclose($file);
    ?>
</body>

</html>