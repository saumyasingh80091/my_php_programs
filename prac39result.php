<?php

 if(isset($_GET['marks'])){
      $marks=$_GET['marks'];

      if($marks>=40){
          echo "Pass";
      }
      else{
           echo "Fail";
      }
 }
 else{
      echo "please enter marks through the form.";
 }

?>