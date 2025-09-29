
<?php

$showoffer=true;
//agar cookie exist karti h  to offer hide kr do
if(isset($_COOKIE['limited_offer'])){
    $showoffer=false;
}

//agar form submit hua h 
 if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['claim'])){
     // cookie set kro 10 mn ke liye
     setcookie('limited_offer','1',time()+600);
     $showoffer=false;//hide ho jaye turant
     header("location:prac51.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      body{
          font-family:Arial;
          text-align:center;
          padding:50px;

      }
      .offer{
          background:#ffe3b;
          color#000;
          padding:20px;
          border-radius:8px;
          display:inline-block;;
          margin-top:20px;
          font-size:18px;
      }
      button{
           margin-top:15px;
           padding:10px 20px;
           border:none;
           border-radius:6px;
           cursor:pointer;
      }
</style>
<body>
    <h1>Welcome to our store</h1>
    <?php if($showoffer): ?>
     <div class="offer">
          Welcome! You get 10% off (valid for 10 minutes).
    <form method="post">
        <button type="submit" name="claim">Claim Offer</button>
    </form>
     </div>
     <?php else :?>
        <p>Sorry, the limited-time offer has expired or already claimed</p>
        <?php endif; ?>
</body>
</html>