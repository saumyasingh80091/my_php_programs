<?php

if(isset($_POST['username'])){
      $name=$_POST['username'];
      echo "Welcome,".$name;
}
else{
      echo "please enter your name through the form.";
}
?>