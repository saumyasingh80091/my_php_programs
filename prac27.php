<?php

$arr=[40,10,70,30,20];

echo "original array:";
print_r($arr);
echo "<br><br>";

$temp=$arr;
sort($temp);
echo "using sort(): <br>";
print_r($temp);
echo "<br><br>";


$temp=$arr;
rsort($temp);
echo "using rsort(): <br>";
print_r($temp);




?>