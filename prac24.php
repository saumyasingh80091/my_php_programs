<?php

 $numbers=[10,20,30,40,50];

 $sum=0;
 for($i=0; $i<count($numbers); $i++){
       $sum=$sum+$numbers[$i];
 }


 echo "array elements:";
 print_r($numbers);
 echo "<br>Total sum=".$sum;
?>