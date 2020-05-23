<?php


require __DIR__ . "/../app/App.php";

require __DIR__ . "/../app/IDo.php";

$ido = new \app\IDo();
$rain = false;
$ido->walk($rain);

echo $ido->mood;