<?php

/**
 * это точка  входа для нашего приложения
 * В этот файл переадресованны все запросы нашего сайта
 */
require '../namespace/exc1/App.php'; // подключили

require '../namespace/exc2/App.php'; // подключили

$app = new exc1\App(); // создали экземля класса

echo "<br>";

$appp = new exc2\App(); // создали экземля класса
