<!DOCTYPE html>
<html>

<body>

    <?php
    $myfile = fopen("textnext.txt", "r") or die("Unable to open file!");
    echo fgets($myfile); //Функция fgets () используется для чтения одной строки из файла.
    fclose($myfile);     //Примечание. После вызова функции fgets () указатель
                        // файла переместился на следующую строку.

    ?>

</body>

</html>