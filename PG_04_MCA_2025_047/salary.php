<?php

$employee_name = $_POST['employee_name'];
$basic_salary = $_POST['basic_salary'];
$hra_percentage = $_POST['hra'];
$da_percentage = $_POST['da'];

// Calculate HRA and DA
$hra = $basic_salary * $hra_percentage / 100;
$da = $basic_salary * $da_percentage / 100;

// Calculate Gross Salary
$gross_salary = $basic_salary + $hra + $da;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Salary Details</title>

    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2>Employee Salary Details</h2>

    <table>
        <tr>
            <th>Employee Name</th>
            <td><?php echo $employee_name; ?></td>
        </tr>

        <tr>
            <th>Basic Salary</th>
            <td>₹<?php echo number_format($basic_salary, 2); ?></td>
        </tr>

        <tr>
            <th>HRA</th>
            <td>₹<?php echo number_format($hra, 2); ?></td>
        </tr>

        <tr>
            <th>DA</th>
            <td>₹<?php echo number_format($da, 2); ?></td>
        </tr>

        <tr>
            <th>Gross Salary</th>
            <td>₹<?php echo number_format($gross_salary, 2); ?></td>
        </tr>
    </table>

</body>
</html>
