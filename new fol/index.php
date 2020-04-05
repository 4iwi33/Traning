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
    if (!$db) 
    {
        die("error to connect");
    }
    mysqli_select_db($db, $dbase) or die("error to connect");
    $select = mysqli_query($db, "SELECT id,short FROM testtable");
    while ($row = mysqli_fetch_array($select)) 
    {
        echo $row . "<br>";
    }

    ?>
</body>

</html>