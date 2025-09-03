<?php

$countries=array("India"=>"New Delhi",
           "USA"=>"Washington,D.C",
           "France"=>"Paris",
           "Japan"=>"Tokyo",
           "Australia"=>"canberra"
     );
     $countries["Germany"]="Berlin";
     echo "updated list of countries and their capitals:<br>"; 
     foreach($countries as $country=>$capital){

        echo "$country=>$capital.<br>";
     }
?>