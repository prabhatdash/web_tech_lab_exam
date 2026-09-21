
<!DOCTYPE html>
<html>
<head>
    <title>Number Check</title>
</head>
<body>

<h2>Check Number</h2>

<form method="post">
    Enter a number:
    <input type="number" name="number" required>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {

    $number = $_POST['number'];

    // Check positive, negative or zero
    if ($number > 0) {
        echo "Number is Positive.<br>";
    } elseif ($number < 0) {
        echo "Number is Negative.<br>";
    } else {
        echo "Number is Zero.<br>";
    }

    // Check even or odd
    if ($number % 2 == 0) {
        echo "Number is Even.";
    } else {
        echo "Number is Odd.";
    }
}
?>

</body>
</html>