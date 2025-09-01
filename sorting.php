<?php
$arr=[40,10,70,30,20,60,90];

echo "Original Array:<br>";
print_r($arr);
echo "<br><br>";

$temp=$arr;
sort($temp);
echo "Using sort():<br>";
print_r($temp);


?>