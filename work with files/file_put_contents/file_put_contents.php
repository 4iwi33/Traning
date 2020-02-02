<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file_put_contents</title>
</head>

<body>
    <?
    //file_put_contents — Пишет данные в файл
    file_put_contents("file_put_contents.txt", "Test test Test");

    //file_get_contents — Читает содержимое файла в строку
    echo file_get_contents("file_put_contents.txt") . "<br>";

    //file_exists — Проверяет существование указанного файла или каталога
    echo file_exists("file_put_contents.txt") . "<br>";

    //rename — Переименовывает файл или директорию
    //rename("file_put_contents.txt", "new.txt")
    
    //unlink — Удаляет файл
    //unlink("file_put_contents.txt");
    ?>
</body>

</html>