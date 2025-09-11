<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
       <form method="POST">
         Number 1:
         <input type="number" name="num1"><br><br>
         Number 2:
         <input type="number" name="num2"><br><br>
         Operation:
          <select name="op">
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="*">*</option>
              <option value="/">/</option>
          </select><br><br>
          <input type="submit" value="calculate">
       </form>
       <?php
       if( $_SERVER['REQUEST_METHOD']=="POST"){
            $a=$_POST['num1'];
            $b=$_POST['num2'];
            $op=$_POST['op'];
            $result=0;
            if($op=="+")
                $result=$a+$b;
            
            elseif($op=="-")
                 $result=$a-$b;
            
             elseif($op=="*")
                 $result=$a*$b;
            
              elseif($op=="/"){
                  if($b!=0)
                     $result=$a/$b;
                  
                  else
                      $result="division by zero not allowed";
                  
                 
                }
                echo "Result:".$result;
       }
           
      ?>
</body>
</html>