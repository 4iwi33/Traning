<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preg_m</title>
</head>

<body>
    <p>Теперь давайте рассмотрим более сложную схему поиска.
        Что если мы хотим проверить, что первые пять символов
        в строке являются буквенно-цифровыми символами.</p>
    <?php
    $test_string = "a44af";

    if (preg_match('/^[A-Za-z0-9]{5}/', $test_string)) {
        echo "Да они буквенно-цифровые";
    } else {
        echo "Не братан не сегодня";
    }
    ?>
</body>

</html>