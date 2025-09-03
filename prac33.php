<?php


$students=array(
              "Sita"=>85,
              "Priya"=>90,
              "Aman"=>78,
              "Snaha"=>92
);
  $key="Aman";
  if(array_key_exists($key,$students)){

    echo "$key exists int the array with value:".$students[$key];
  }
  else{
      echo "key $key does not exist in the array";
  }
?>