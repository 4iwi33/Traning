<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1">
    <link rel="stylesheet" href="style.css">
    <title>index_php</title>
</head>

<body>
    <?
    $mes_arr = file('text.txt');
    foreach ($mes_arr as $key => $value) {
        $buf = explode(':', $value);
        echo "<div class = '" . (($key % 2) ? 'odd' : 'even') . "'>$buf[1] : $buf[2] </div>";
    }



    ?>
</body>

</html>