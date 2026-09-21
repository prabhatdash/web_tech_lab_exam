<!DOCTYPE html>
<html>
<head>
    <title>Number Checker</title>
</head>
<body>

    <h2>Number Checker</h2>

    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if ($number > 0) {
            echo "<p>The number is Positive.</p>";
        } elseif ($number < 0) {
            echo "<p>The number is Negative.</p>";
        } else {
            echo "<p>The number is Zero.</p>";
        }

        if ($number % 2 == 0) {
            echo "<p>The number is Even.</p>";
        } else {
            echo "<p>The number is Odd.</p>";
        }
    }
    ?>

</body>
</html>