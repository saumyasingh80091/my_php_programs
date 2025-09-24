<?php

if(isset($_COOKIE['name'])) {
    echo "Welcome back, " . $_COOKIE['name'];
} elseif(isset($_POST['name'])) {   
    $name = $_POST['name'];
    setcookie('name', $name, time() + 86400); 
    echo "Hello, $name! Your name is saved.";
} else {
    echo "Please enter your name.";
}
?>



