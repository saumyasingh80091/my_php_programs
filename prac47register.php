<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation: check if any field is empty
    if (empty($username) || empty($email) || empty($password)) {
        echo "<h3 style='color:red;'>Error: All fields are required!</h3>";
    } else {
        echo "<h2>Registration Successful!</h2>";
        echo "Username: " .$username. "<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password. "<br>";
    }
}
?>