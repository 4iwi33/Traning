<title>[a-z]</title>

<?php
$str = "qadkkaalsckddkcxz";
//символ "[a-z]" находит первые буквы от а до z
//символ "[а-z]+" находит слова от а до z
preg_match('/[a-z]+/', $str, $match);

var_dump($match);
echo "<hr>";
print_r($match);
?>