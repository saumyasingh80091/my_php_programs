<?php

$numbers=[10,20,30,20,40,10,50,30];

echo "orginal array:";
print_r($numbers);

$uniqueNumbers=array_unique($numbers);

echo "<br>Array after removing dublicates:";
print_r($uniqueNumbers);
?>