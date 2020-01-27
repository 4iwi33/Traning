    <?php
    $file = fopen("exc2.txt",  "r+t");
    while (feof($file)) {
        echo fread($file, 1);
    }
    fclose($file);

    // it doesn't work
    ?>