<title>[-+_=]</title>

<?php
$str = "qadkkaalsckddkcxz-+_=-----";
//символ "[-+_=]" находит первый строчный символ
//символ "[-+_=]+" находит строчне символы
//добавляя сразу без побела символ "{4}" и указывание количество строчных символов
//чтобы найти все символы добавляем "," {4,}
preg_match('/[-+_=]{4,}/', $str, $match);

var_dump($match);
echo "<hr>";
print_r($match);
?>