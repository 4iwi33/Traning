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
        <input type="text" name="name" value="<?= !empty ($_POST['name']) ? $_POST['name'] : "" ?>">
        <input type="text" name='for'>
        <input type="submit" type="submit" value="OK">
    </form>
    <?php
    
    $ban = file("ban.txt");

    if (in_array($_SERVER['REMOTE_ADDR'], $ban)) {
        echo '<div class = "BAN">Вы заблокированны!</div>';
    } else {
        file_put_contents("text.txt", $_SERVER['HTTP_USER_AGENT'] . ":" . $_SERVER['REMOTE_ADDR'] . ":" . $_POST['name'] . ":" . $_POST['for'] . "\n", FILE_APPEND);
    }

    // if (!empty($_POST['for'])) {
    //     file_put_contents('text.txt', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . ": " . $_POST['userName'] . ":" . $_POST['for'] . "\n", FILE_APPEND);
    // }

    ?>
</body>

</html>