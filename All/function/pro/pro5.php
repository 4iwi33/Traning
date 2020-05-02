<?php
function sum($a = 5, $b = 4 ) //можем задать значения по умолчанию 
{
    $sum = $a + $b;
    return $sum;
}
echo sum();
?>