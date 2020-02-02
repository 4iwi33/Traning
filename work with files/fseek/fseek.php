<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fseek</title>
</head>

<body>
    <?
    //fseek — Устанавливает смещение в файловом указателе
    $file = fopen("fseek.txt", "r+t"); //$file - это функция
    while (!feof($file)) { //feof — Проверяет, достигнут ли конец файла
        echo fread($file, 1) . "<br>"; //$file(файл который считывает) 1(количество символов)
    }
    fseek($file, 0); // $file (файл) 0 (значение куда устанавливаем курор)
    echo fread($file, 10);
    fclose($file);
    ?>
</body>

</html>