<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Which is your favroite programming language</h2>
    <form method="POST">
        <input type="radio" name="language" value="PHP" required>PHP <br>
        <input type="radio" name="language" value="Javascript">Javascript <br>
         <input type="radio" name="language" value="Python">Python <br><br>
          <input type="submit" value="Submit zX">
    </form>
    <?php

  if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $selectedLanguage=$_POST['language'];
            echo "your favroite programming language is:".$selectedLanguage;      
  }
?>
</body>
</html>