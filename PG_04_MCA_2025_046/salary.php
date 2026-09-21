<!DOCTYPE html>
<html>
<head>
    <title>Salary Details</title>
</head>
<body>

    <h2>Employee Salary Details</h2>

    <?php

    $name = $_POST["name"];
    $basic = $_POST["basic"];
    $hra_percent = $_POST["hra_percent"];
    $da_percent = $_POST["da_percent"];

    // Calculate HRA
    $hra = $basic * $hra_percent / 100;

    // Calculate DA
    $da = $basic * $da_percent / 100;

    // Calculate Gross Salary
    $gross = $basic + $hra + $da;

    ?>

    <table border="1" cellpadding="10">
        <tr>
            <th>Employee Name</th>
            <td><?php echo $name; ?></td>
        </tr>

        <tr>
            <th>Basic Salary</th>
            <td><?php echo $basic; ?></td>
        </tr>

        <tr>
            <th>HRA</th>
            <td><?php echo $hra; ?></td>
        </tr>

        <tr>
            <th>DA</th>
            <td><?php echo $da; ?></td>
        </tr>

        <tr>
            <th>Gross Salary</th>
            <td><?php echo $gross; ?></td>
        </tr>
    </table>

</body>
</html>
