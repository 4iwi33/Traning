<?php
// $connect = mysqli_connect("127.0.0.1:3306","root", "", "posts");
$host = "4iwi";
$username = "root";
$password = "";
$db = "posts";

$connect = mysqli_connect($host, $username, $password, $db);

if ( !$connect) {
    echo "Пдключение не удалось";
    echo "Произошла ошибка" . mysqli_connect_errno();
    exit;
}
