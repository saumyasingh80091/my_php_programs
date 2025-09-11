<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form action="" method="post">
        Name:
        <input type="text" name="name" required><br><br>
        Email:
        <input type="email" name="email" required><br><br>
        Message:  <br>
        <textarea name="message" row="5" cols="30" required></textarea><br><br>
        <input type="submit" value="Submit">
      
    </form>
      <?php

      if($_SERVER['REQUEST_METHOD']=="POST"){
           $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];
             header("location:prac44thankyou.php? name=".urlencode($name));
       exit();
      }
      
?>
</body>
</html>