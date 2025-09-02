<?php

$numbers=[25,889,12,67,45,99,54];

$smallest=$numbers[0];
$largest=$numbers[0];

for($i=1; $i<count($numbers); $i++){

    if($numbers[$i]<$smallest){
        $smallest=$numbers[$i];
    }
     if($numbers[$i]> $largest){
        $largest=$numbers[$i];
    }
}
  echo "smallest number is=".$smallest;
   echo "<br>";
  echo "largest number is=".$largest;

 

?>