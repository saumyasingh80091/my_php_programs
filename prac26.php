<?php

$arr=[10,20,30,40,50,60];

echo "original array:";
print_r($arr);
echo "<br><br>";

echo "Reverse (without using array_reverse):";
for($i=count($arr)-1; $i>=0; $i--){
     echo $arr[$i]." ";
}

echo "<br><br>";

echo "reverse (with array_reverse):";
$Arr=array_reverse($arr);
print_r($Arr);

?>