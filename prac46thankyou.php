<?php
$name=isset($_GET['name'])?

$_GET['name']: "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Thank you <?php  echo $name ?>,we will contact you soon!</h2>
</body>
</html>