<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>do_while</title>
</head>

<body>
    <!-- работает также как и while только истинность проверяется в конце цикла -->
    <?php
    $i = 0;
    do {
        $i++;
    } while ($i > 10);
    echo $i;
    ?>
</body>

</html>