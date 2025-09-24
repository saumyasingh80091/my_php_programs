<?php
if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $cookie_name = "visits_" . str_replace(' ', '_', $name);

    // Get current visits from cookie if it exists, else 0
    $visits = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : 0;

    $visits++; // Increment visit count

    // Save updated count in cookie
    setcookie($cookie_name, $visits, time() + 30*24*60*60);

    // Display current count
    if($visits == 1){
        echo "Hello $name! This is your first visit!";
    } else {
        echo "Hello $name! You have visited $visits times.";
    }
} 
?>
