<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>switch</title>
</head>

<body>
    <?php
    // switch-переключатель
    //зададим значение $a
    $a = 21; //сдесь указываем case который хотим задействовать

    switch ($a) {
        case 16:
            echo "Тебе 16 лет";
            break;
        case 18:
            echo "Вам 18 лет";
            break;
        default: //после default ставить break не нужно
            echo "Мне $a лет";
    }


    echo "<hr>";

    //exc#2

    $a = "1";
    switch ($a) {
        case 1:
            echo "A equally 1";
            break;
        case 2:
            echo "A equally 2";
            break;
    }

    echo "<hr>";

    //хороший пример с цветом как аботает переключатель
    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
</body>

</html>