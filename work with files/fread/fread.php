<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fread</title>
</head>

<body>
    <?
    //fread - Бинарно-безопасное чтение файла
    $file = fopen("fread.txt", "r+t"); //$file - это функция
    while (!feof($file)) { //feof — Проверяет, достигнут ли конец файла
        echo fread($file, 1) . "<br>"; //$file(файл который считывает) 1(количество символов)
    }
    fclose($file);
    ?>
</body>

</html>