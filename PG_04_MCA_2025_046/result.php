<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

    <h2>Result</h2>

    <?php

    $number = $_POST["number"];

    if ($number > 0) {
        echo "The number is positive.<br>";
    } elseif ($number < 0) {
        echo "The number is negative.<br>";
    } else {
        echo "The number is zero.<br>";
    }

    if ($number % 2 == 0) {
        echo "The number is even.";
    } else {
        echo "The number is odd.";
    }

    ?>

</body>
</html>
