<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First</title>
</head>

<body>

    <?php
    /*$number  = -45;
    $float = -3.25;
    $string = "Hello World";
    $bool = true;
    echo "number = $number";
    echo "<br>";
    echo "float = $float";
    echo "<br>";
    echo "string = $string";
    echo "<br>";
    echo "bool = $bool";
    */
    /*define("PI", 3.14);
     echo PI;
     echo "<br>";
     echo defined("PI");
    */
    /*
    $x = 32;
    $y = 22.13;
    $summ = $x + $y;
    $diff = $x - $y;
    $mult = $x * $y;
    $del = $x / $y;


    echo "Сумма из $x  и $y = $summ";
    echo "<br>";
    echo "$x $y = $diff";
    echo "<br>";
    echo "$x $y = $mult";
    echo "<br>";
    echo "$x $y = $del";
    echo "<br>";


    $z = 12;
    $ostat = $x % $z;
    echo "$x $z =$ostat";

    echo "<br>";

    $q = 400;

    $q +=10;
    $q++;
    echo $q;

    echo "<br>";

    $str_1 = "<b>First string</b> <input type=\"text\" ";
    $str_2 = "Second string";
    
    echo $str_1." ".$str_2." \" \\";
    echo ' \' ';

*/

    /* $x = 12;
    $y = 34;
    $z = 4.25;

    $bool_1 = $x != $z;

    $bool_2 = $x <= $y;

    echo $bool_1 . "<br />" . $bool_2;

    $bool_3 = !($x == $y);

    $bool_4 = $x == $y || $z < $y;

    $bool_5 = $z != $y && $x < $y;

    $bool_6 = $z != $x ^ $y > $z; 

    echo "<br />" . $bool_3 . "<br />" . $bool_4."<br />".$bool_5."<br />".$bool_6;


$bool = ($x != $y && $z < $x) || $x != $y;
echo "<br />".$bool;
*/
    // Пример оператора Эквивалентности
    /* $string = "Example";
    $num = 0;

    $bool = $string == true;
    echo "$bool = $string == true;";

    $bool_2 = $num == "";
    echo "<br />$bool_2 = $num == \"\";";
    echo "<hr>";

    $bool_3 = $string === true;
    echo "$bool_3 = $string === true;";

    echo "<br />";

    $bool_4 = $num === true;
    echo "$bool_4 = $num === \"\";";
*/

    // Условные операторы
    /*$x = 10;
    $y = 5;

    if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15)
        echo 'работает2';
    else if ($x == 15 || $y != 7) {
        $num = 5;
        echo "число № " . $num;
    } else {
        echo "<br />";
        echo 'работает';
    }

    $x == $y ? $string = "yes" : $string = "no";
    echo "<br />" . $string;*/

    //Условные операторы 2 часть
    /*$x = 14;

    switch ($x) {
        case "Hello" : echo "String"; break;
        case 5 : echo "переменная ровна 5"; break;
        case 7 : echo "переменная ровна 7"; break;
        case 12 : echo переменная ровна 12"; break;
        default : echo "переменная не известна";    
    }*/
    //Циклы
    /*for ($i = 100; $i >= 80; $i -= 2) {
        if ($i % 5 == 0) continue;
        if ($i <= 87) break;
        echo "cikle № $i<br />";
    }

    echo "<br />";
    $x = 1;
    while ($x <= 10) {
        if ($x == 7)
            for ($y = 0; $y < 5; $y += 3)
                echo "second iteration - $y <br/>";
        echo "iteration # $x <br />";
        $x++;
    }

    echo "<br />";
    $z = 10;
    do {
        echo "operation completed only once";
        $z++;
    } while ($z < 5);
*/

    //Функции
    /*function  printWords ($word, $x, $y) {
    $word = math ($x, $y);
    echo "$word";
}
function math ($first, $second) {
    $summa = $first + $second;
    return $summa;
}
 $x = 12;
 $y = 35;

 $sum = math ($x, $y);
printWords ($sum, $x, $y);
*/

    //Массивы 
    /*$array = array(12, -3.25, "String", false);
    echo $array[1];
    $array[1] = "String";
    $array[2] = 4.25;
    echo "<br />" . $array[1] . "<br />" . $array[2];

    $array[] = "new";
    echo "<br />" . $array[4] . "<hr />";

    for ($i = 0; $i < count($array); $i++) {
        echo "Элемент массива с индексом $i = " . $array[$i] . "<br />";
    }

    
    echo "<hr />";
    $list = array ("age" => 12, "name"=> "Alex", "schoolboy" => true);
    $list ["age"] = 10;
    $summa = 0;

    echo getAverage (array ("first" => 12, "sec" => 45, "third" => 23, "forth" =>55));

    function getAverage ($array) {
        foreach ($array as $key => $value) {
            $summa += $value;
        }
        return $summa / count ($array);
    }
    */

    //Двумерные массивы
    /*$array = array(array(12, 4.46, "String", true), array("Example"), array(45, "Strong"));

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo $array[$i][$j] . " | ";
        }
        echo "<br />";
    }
    */

    /*
    //Область видимости различных переменных
    //1.Глобальные переменные
    //2.Локальные переменные
    //3.Статические переменные

    //1Глоб
    $x = 12;
    echo "Переменная x = $x<br/>";
    $x = 10;
    echo "Переменная x = $x<br/>";
    //2Лок
    function test()
    {
        //$GLOBALS["x"] += 7;
        //$x = 0;
        global $x;
        $x += 10;
        //echo "Переменная x = $x<br />";
    }
    test();

    function test_2()
    {
        static $id;
        $id++;
        echo $id."<br/>";
    }

    for ($i = 0; $i < 10; $i++) {
        test_2();
    }
    */

    //Подключение сторонних файлов 
    /*$title = "Главная страница";
    include_once "header.php";
    echo "Тело документа";
    include_once "footer.php";

    include_once "page.php";
    */
    //Обработка форм
    



































    ?>
</body>

</html>