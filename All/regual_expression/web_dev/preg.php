<title>i\b</title>
<?php
//символ "i" - регистронезависимый поиск(не будет смотреть на регистр)
//символ "\b" граница слова
if (preg_match("/\bweb/i", "PHP is the webbing scripting language")) {
    echo "Succses";
} else {
    echo "False";
}

?>