<?php
session_start();

// isset — Определяет, была ли установлена переменная значением, отличным от NULL
$num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
$num++;
$_SESSION["num"] = $num;
echo "Пользователь обновил страницу $num раз";

// session_destroy — Уничтожает все данные сессии

