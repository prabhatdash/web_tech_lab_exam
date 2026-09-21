<!DOCTYPE html>
<html>
<head>
    <title>Number Checker</title>
</head>
<body>

<h2>Number Checker</h2>

<form method="post">
    Enter a number:
    <input type="number" name="num" required>
    <input type="submit" name="check" value="Check">
</form>

<?php
if (isset($_POST['check'])) {

    $num = $_POST['num'];

    
    if ($num > 0) {
        echo "<p>Number is <b>Positive</b></p>";
    } elseif ($num < 0) {
        echo "<p>Number is <b>Negative</b></p>";
    } else {
        echo "<p>Number is <b>Zero</b></p>";
    }

    
    if ($num % 2 == 0) {
        echo "<p>Number is <b>Even</b></p>";
    } else {
        echo "<p>Number is <b>Odd</b></p>";
    }
}
?>

</body>
</html>