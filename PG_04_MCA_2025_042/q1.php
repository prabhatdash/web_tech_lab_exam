<!DOCTYPE html>
<html>
<head>
    <title>Number Checker</title>
</head>
<body>
<h2>Number Checker</h2>
<form method="post">Enter a number:
    <input type="number" name="num" required>
    <input type="submit" value="Check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num = $_POST["num"];

    if ($num > 0) {
        echo "<p>Number is positive</p>";
    } elseif ($num < 0) {
        echo "<p>number is negative.</p>";
    } else {
        echo "<p>Number is Zero.</p>";
    }

    if ($num % 2 == 0) {
        echo "<p>Number is Even.</p>";
    } else {
        echo "<p>Number is Odd.</p>";
    }
}
?>
</body>
</html>