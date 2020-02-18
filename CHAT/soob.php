<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>soob</title>
</head>

<body>
    <form action='?' method="POST">
        <input type="text" name="UserName" value="<?= !empty($_POST['UserName']) ? $_POST['UserName']: "" ?>">
        <input type="text" name='for'>
        <input type="submit" type="submit" value="OK">
    </form>
    <?php
    // print_r($_SERVER);
    if (!empty($_POST['for'])) {
        file_put_contents('text.txt', $_SERVER['SERVER_ADDR'] . ":" . $_POST['UserName'] . ": " . $_POST['for'] . "\n", FILE_APPEND);
    }

    ?>
</body>

</html>