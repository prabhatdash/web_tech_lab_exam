<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Calculator</title>
</head>
<body>

<h2>Employee Salary Calculator</h2>

<form method="post">
    Employee Name:
    <input type="text" name="name" required><br><br>

    Basic Salary:
    <input type="number" name="basic" step="0.01" required><br><br>

    HRA Percentage:
    <input type="number" name="hra_percent" step="0.01" required><br><br>

    DA Percentage:
    <input type="number" name="da_percent" step="0.01" required><br><br>

    <input type="submit" name="calculate" value="Calculate Salary">
</form>

<?php
if (isset($_POST['calculate'])) {

    $name = $_POST['name'];
    $basic = $_POST['basic'];
    $hra_percent = $_POST['hra_percent'];
    $da_percent = $_POST['da_percent'];

    
    $hra = $basic * $hra_percent / 100;
    $da = $basic * $da_percent / 100;

    
    $gross = $basic + $hra + $da;
?>

<h2>Salary Details</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Employee Name</th>
        <td><?php echo $name; ?></td>
    </tr>

    <tr>
        <th>Basic Salary</th>
        <td><?php echo number_format($basic, 2); ?></td>
    </tr>

    <tr>
        <th>HRA</th>
        <td><?php echo number_format($hra, 2); ?></td>
    </tr>

    <tr>
        <th>DA</th>
        <td><?php echo number_format($da, 2); ?></td>
    </tr>

    <tr>
        <th>Gross Salary</th>
        <td><b><?php echo number_format($gross, 2); ?></b></td>
    </tr>
</table>

<?php
}
?>

</body>
</html>