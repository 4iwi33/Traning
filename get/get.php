<?
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Hello PHP</h1>
    <form action="get.php" method="GET">
        <input type="text" name="Login" placeholder="Login">
        <input type="password" name="Password" placeholder="Password">
        <input type="submit" name="Log" value="Log">
        <!-- атрбут name нужен для создания ключа , 
        а то что человек вводит в форму это будет значене
        у нас есть 3 ключа : name="Login \ name="Password" \ name="Log"  -->
    </form>
    <hr>
    <?php
    echo $_GET['Login'];
    ?>
    <br>
    <?php
     echo $_GET['Password'];
    ?>

</body>

</html>