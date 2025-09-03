<?php
$fruits=array(
        "Apple"=>120,
        "Banana"=>40,
        "mango"=>80,
        "Orange"=>60,
        "Grapes"=>100
);

echo "original array:";
foreach($fruits as $fruit=>$price){
    echo "$fruit=>$price"."<br>";
}

asort($fruits);
echo "sorted by values(asort):";
foreach($fruits as $fruit=>$price){
    echo "$fruit=>$price"."<br>";
}

ksort($fruits);
echo "sorted by values(ksort):";
foreach($fruits as $fruit=>$price){
    echo "$fruit=>$price"."<br>";
}

?>