<?php
echo "Exc1" . "<br>";
$arr = array( //массив в массиве
    array(0, 5, -5), //первый
    array("hello", "world"), // второй
    //создали асоциативный массив 
    array("name" => "Alex", "age" => 27)
);
//$arr[2]- номер массива [1]-(значение) либо ключ["age"]
echo $arr[2]["age"]; //обращаемся к значению элемента
// print_r($arr);
echo "<hr>";
echo "Exc2" . "<br>";

//теперь разберём массив 
for ($i = 0; $i < count($arr); $i++) {
    for ($a = 0; $a < count($arr[$i]); $a++) {
        echo $arr[$i][$a];
        echo "<br>";
    }
}
