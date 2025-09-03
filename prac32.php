<?php

$students=array(
              "Sita"=>85,
              "Priya"=>90,
              "Aman"=>78,
              "Snaha"=>92,
              "Arjun"=>80
);

$students["Aman"]=88;

echo "updated students marks:<br>";

  foreach($students as $name=>$marks){
     echo "$name=>$marks <br>";
  }


?>