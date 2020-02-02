<?php

if ($_POST["name"] == "") {
    echo "Введите имя. <a href='/'>Исправить</a>";
}
header("Location: forms.php");
?>