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
        <input type="text" value="<?= $_POST['userName'] ?>" name='userName'>
        <input type="text" name='for'>
        <input type="submit" type="submit" value="OK">
    </form>
    <?
    // print_r($_SERVER);
    if (!empty($_POST['for'])) {
        file_put_contents('text.txt', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . ": " . $_POST['userName'] . ":" . $_POST['for'] . "\n", FILE_APPEND);
    }

    ?>
</body>

</html>