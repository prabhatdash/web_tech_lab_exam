<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Calculator</title>
</head>
<body>

    <h2>Employee Salary Calculator</h2>

    <form method="post">
        <label>Employee Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Basic Salary:</label>
        <input type="number" name="basic" step="0.01" required><br><br>

        <label>HRA Percentage:</label>
        <input type="number" name="hra" step="0.01" required><br><br>

        <label>DA Percentage:</label>
        <input type="number" name="da" step="0.01" required><br><br>

        <input type="submit" value="Calculate Salary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $basic = $_POST["basic"];
        $hraPercent = $_POST["hra"];
        $daPercent = $_POST["da"];

        $hra = $basic * $hraPercent / 100;
        $da = $basic * $daPercent / 100;
        $gross = $basic + $hra + $da;

        echo "<h3>Salary Details</h3>";

        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Employee Name</th><td>$name</td></tr>";
        echo "<tr><th>Basic Salary</th><td>₹" . number_format($basic, 2) . "</td></tr>";
        echo "<tr><th>HRA</th><td>₹" . number_format($hra, 2) . "</td></tr>";
        echo "<tr><th>DA</th><td>₹" . number_format($da, 2) . "</td></tr>";
        echo "<tr><th>Gross Salary</th><td>₹" . number_format($gross, 2) . "</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>