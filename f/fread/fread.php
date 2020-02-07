<?
// Функция fread () читает из открытого файла.

// Первый параметр fread () содержит имя файла для чтения,
//  а второй параметр определяет максимальное количество 
//  байтов для чтения.

$myfile = fopen("text.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("text.txt"));
fclose($myfile);