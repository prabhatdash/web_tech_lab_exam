
<!DOCTYPE html>
<html>
<head>
    <title>Salary Calculator</title>
</head>
<body>

<h2>Salary Calculator</h2>

<form method="post">
    Employee Name: <input type="text" name="emp_name" required><br><br>
    Basic Salary: <input type="number" name="basic_salary" step="0.01" required><br><br>
    HRA Percentage: <input type="number" name="hra_percent" step="0.01" required><br><br>
    DA Percentage: <input type="number" name="da_percent" step="0.01" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_name = $_POST["emp_name"];
    $basic_salary = $_POST["basic_salary"];
    $hra_percent = $_POST["hra_percent"];
    $da_percent = $_POST["da_percent"];

    $hra = $basic_salary * ($hra_percent / 100);
    $da = $basic_salary * ($da_percent / 100);
    $gross_salary = $basic_salary + $hra + $da;
?>

<table border="1">
    <tr>
        <th>Employee Name</th>
        <th>Basic Salary</th>
        <th>HRA</th>
        <th>DA</th>
        <th>Gross Salary</th>
    </tr>
    <tr>
        <td><?php echo $emp_name; ?></td>
        <td><?php echo $basic_salary; ?></td>
        <td><?php echo $hra; ?></td>
        <td><?php echo $da; ?></td>
        <td><?php echo $gross_salary; ?></td>
    </tr>
</table>

<?php
}
?>
</body>
</html>