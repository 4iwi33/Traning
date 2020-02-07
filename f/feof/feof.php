<!DOCTYPE html>
<html>

<body>

    <?php
    // Функция feof () проверяет, достигнут ли конец файла (EOF).
    // Функция feof () полезна для циклического прохождения данных неизвестной длины.
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) { //Функция feof () проверяет, достигнут ли конец файла
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>

</body>

</html>