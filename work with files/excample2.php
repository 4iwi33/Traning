    <?php
    $file = fopen("exc2.txt",  "r+t");
    while (!feof($file)) {
        echo fread($file, 1);
    }
    fseek($file, 0);

    echo fread($file, 1);

    fclose($file);
    echo "<hr>";

    // it doesn't work
    ?>