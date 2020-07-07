<?php

include('autoload.php');

$object = new Car("BMW\n", "5-series\n", "2020\n", "Red\n");
echo $object->CarInfo();

$objectMod = new Mod("BMW\n", "5-series\n", "2020\n", "Red\n", "4.4\n", "617\n");
echo $objectMod->CarInfo();