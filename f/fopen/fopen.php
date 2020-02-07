<!DOCTYPE html>
<html>

<body>

    <?php
    // Первый параметр fopen () содержит имя файла,
    //  который нужно открыть, а второй параметр
    //   указывает, в каком режиме файл должен быть открыт.
    //    В следующем примере также генерируется сообщение,
    //     если функция fopen () не может открыть указанный файл:
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("text.txt"));
    fclose($myfile);
    ?>

</body>

</html>