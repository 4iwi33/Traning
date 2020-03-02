<title>[0-9]</title>

<?php
$str = "54657448-9807969";
//символ "[0-9]" находит первую цифру от 0 до 9
//символ "[0-9]+" находит числа от 0 до 9
preg_match('/[0-9]+/', $str, $match);

var_dump($match);
echo "<hr>";
print_r($match);
?>