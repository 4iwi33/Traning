<?
var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <h1>Hello</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="Login" placeholder="Login">
        <input type="password" name="Password" placeholder="Password">
        <input type="submit" name="Log" value="Log">
        <!-- атрбут name нужен для создания ключа , 
        а то что человек вводит в форму это будет значене
        у нас есть 3 ключа : name="Login \ name="Password" \ name="Log"  -->
    </form>
    <br>
    <?
    // echo $_GET['Login'];
    ?>
    <br>
    <?
    // echo $_GET['Password'];
    ?>

</body>

</html>