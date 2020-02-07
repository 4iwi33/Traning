<!DOCTYPE html>
<html>

<body>

    <?php
    //Функция fgetc () используется для чтения одного символа из файла.
    //файл считывается до достижения конца файла:
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while (!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);
    ?>

</body>

</html>