<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>\w+</title>
</head>

<body>
    <?php
    $str = "444test    string end\n";
    // символ"\w" находит первую букву
    // символ"\w+" находит от начала,все буквы и цифы до первого прбела. то есть"444test"
    // символ"\s" учитывает пробел
    // символ"\s+" учитывает несколько пробелов
    // символ".*" находт всю строчку 
    // preg_match('/\w+\s+\w+/', $str, $match);
    preg_match('/^4.*/', $str, $match); //начало с чсла 4 и вся остальная строчка
    var_dump($match);
    ?>
</body>

</html>