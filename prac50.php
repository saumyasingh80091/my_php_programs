<?php
// Agar cookie set hai to uska value lo, warna default = light
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

// Agar form submit hua hai
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    // Cookie set karo (1 saal ke liye)
    setcookie("theme", $theme, time() + (86400 * 365), "/");
    // Refresh page taki turant theme apply ho jaye
    header("Location: prac50.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Theme Preference</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
      transition: 0.3s;
    }
    body.light {
      background: white;
      color: black;
    }
    body.dark {
      background: black;
      color: white;
    }
    button {
      margin: 10px;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
  </style>
</head>
<body class="<?php echo $theme; ?>">

  <h2>Choose Your Theme</h2>

  <form method="post">
    <button type="submit" name="theme" value="light">Light Mode</button>
    <button type="submit" name="theme" value="dark">Dark Mode</button>
  </form>

</body>
</html>