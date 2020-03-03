<title>preg</title>
<?php
//символ "i" - регистронезависимый поиск(не будет смотреть на регистр)
if (preg_match("/php/i", "PHP is the web scripting language")) {
    echo "Succses";
} else {
    echo "False";
}

?>