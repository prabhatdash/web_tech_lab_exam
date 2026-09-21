
<!DOCTYPE html>
<html>
<head>
    <title>Question 2</title>
</head>
<body>

<h2>Employee Salary Calculator</h2>

<form method="post">

    Employee Name:
    <input type="text" name="name" required>
    <br><br>

    Basic Salary:
    <input type="number" name="basic_salary" required>
    <br><br>

    HRA Percentage:
    <input type="number" name="hra_percentage" required>
    <br><br>

    DA Percentage:
    <input type="number" name="da_percentage" required>
    <br><br>

    <input type="submit" name="submit" value="Calculate">

</form>

<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $basic_salary = (float) $_POST['basic_salary'];
    $hra_percentage = (float) $_POST['hra_percentage'];
    $da_percentage = (float) $_POST['da_percentage'];

    $hra = $basic_salary * $hra_percentage / 100;
    $da = $basic_salary * $da_percentage / 100;
    $gross_salary = $basic_salary + $hra + $da;

    echo "<h2>Salary Details</h2>";

    echo "<table border='1' cellpadding='10'>";

    echo "<tr><th>Employee Name</th><td>$name</td></tr>";

    echo "<tr><th>Basic Salary</th><td>$basic_salary</td></tr>";

    echo "<tr><th>HRA</th><td>$hra</td></tr>";

    echo "<tr><th>DA</th><td>$da</td></tr>";

    echo "<tr><th>Gross Salary</th><td>$gross_salary</td></tr>";

    echo "</table>";
}

?>

</body>
</html>