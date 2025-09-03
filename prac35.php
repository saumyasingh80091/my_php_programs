<?php


$countries=array("India"=>"New Delhi",
           "USA"=>"Washington,D.C",
           "France"=>"Paris",
           "Japan"=>"Tokyo",
           "Australia"=>"canberra"
     );
    
     $capital="Paris";

     $country=array_search($capital,$countries);

     if($country!==false){
         echo "the capital city '$capital' belongs to:$country";
     }
     else{
           echo "the capital city '$capital' not found in the array:$country";
     }



?>