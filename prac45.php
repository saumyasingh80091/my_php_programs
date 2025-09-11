<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
</head>
<body>

<h2>Simple Online Quiz</h2>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Correct answers
    $answers = [
        "q1" => "b", // Example correct answer
        "q2" => "c",
        "q3" => "a"
    ];

    // Check each answer
    foreach ($answers as $question => $correct) {
        if (isset($_POST[$question]) && $_POST[$question] == $correct) {
            $score++;
        }
    }

    echo "<h3>Your score is: $score / 3</h3>";
} else {
?>

<form method="POST">
    <h4>1. What does PHP stand for?</h4>
    <input type="radio" name="q1" value="a" required> Personal Home Page<br>
    <input type="radio" name="q1" value="b"> Hypertext Preprocessor<br>
    <input type="radio" name="q1" value="c"> Preprocessor Hypertext<br><br>

    <h4>2. Which language runs in a web browser?</h4>
    <input type="radio" name="q2" value="a" required> PHP<br>
    <input type="radio" name="q2" value="b"> Python<br>
    <input type="radio" name="q2" value="c"> JavaScript<br><br>

    <h4>3. HTML stands for?</h4>
    <input type="radio" name="q3" value="a" required> Hypertext Markup Language<br>
    <input type="radio" name="q3" value="b"> Home Tool Markup Language<br>
    <input type="radio" name="q3" value="c"> Hyperlink Markup Language<br><br>

    <input type="submit" value="Submit Quiz">
</form>

<?php
}
?>

</body>
</html>