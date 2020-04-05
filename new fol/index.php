<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbase = 'test';

    $db = mysqli_connect($dbhost, $dbuser, $dbpass) or die("error to connect");

    if (!$db) {
        die("error to connect");
    }
    mysqli_select_db($db, $dbase) or die("error to connect");
    $select1 = mysqli_query($db, "SELECT COUNT(*) FROM testtable");
    if (!$select1) die('Error');
    $row1 = mysqli_fetch_array($select1);   
    $count_post = $row1[0]; 

    //Оператор "LIMIT" позволяет вывести указанное число строк из таблицы.
    //записывается всегда в конце запроса.
    $select = mysqli_query($db, "SELECT id,short FROM testtable ORDER BY id DESC     LIMIT 5");

    echo $count_post;

    while ($row = mysqli_fetch_array($select)) {
        echo $row[1] . "<br>";
    }

    echo "Page: 1 2 3";
    ?>
</body>

</html>