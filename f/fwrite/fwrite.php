<!DOCTYPE html>
<html lang="en">

<head>
    <title>fwrite</title>
</head>

<body>
    <?php
    // Функция fwrite () используется для записи в файл.
    // Первый параметр fwrite () содержит имя файла для записи,
    //  а второй параметр - строку для записи.
    // В приведенном ниже примере записывается пара имен в
    //  новый файл с именем «newfile.txt»:
    $myfile = fopen("newfile.txt", "w");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    //Обратите внимание, что мы записали в файл "newfile.txt" дважды.
    //Каждый раз, когда мы записывали в файл, мы отправляли строку $ txt,
    //которая сначала содержала «John Doe», а вторая содержала «Jane Doe».
    //После того как мы закончили писать, мы закрыли файл с помощью функции fclose ().
    ?>

</body>

</html>
