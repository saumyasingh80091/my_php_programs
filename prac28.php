<?php

$numbers=[10,20,30,40,50];

$searchValue=90;

if(in_array($searchValue,$numbers)){

    echo "the value $searchValue exists in the array.";

}
else{

    echo "the value  $searchValue  does not exist in the array.";
}

?>