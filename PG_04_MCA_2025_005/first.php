<?php

$name = $roll = $marks1 = $marks2 = $marks3 = "";
$total = $percentage = $result = "";
$showResult = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = htmlspecialchars($_POST['name']);
    $roll  = htmlspecialchars($_POST['roll']);
    $marks1 = (float) $_POST['marks1'];
    $marks2 = (float) $_POST['marks2'];
    $marks3 = (float) $_POST['marks3'];

    $total = $marks1 + $marks2 + $marks3;
    $percentage = $total / 3;

    $result = ($percentage >= 40) ? "Pass" : "Fail";

    $showResult = true;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 400px; margin: auto; }
        input { display: block; margin: 8px 0; padding: 6px; width: 100%; box-sizing: border-box; }
        table { margin-top: 20px; border-collapse: collapse; width: 100%; }
        td, th { border: 1px solid #999; padding: 8px; text-align: left; }
        .pass { color: green; font-weight: bold; }
        .fail { color: red; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <h2>Student Result Form</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required value="<?php echo $name; ?>">

        <label>Roll Number:</label>
        <input type="text" name="roll" required value="<?php echo $roll; ?>">

        <label>Marks in Subject 1 (out of 100):</label>
        <input type="number" name="marks1" step="0.01" min="0" max="100" required>

        <label>Marks in Subject 2 (out of 100):</label>
        <input type="number" name="marks2" step="0.01" min="0" max="100" required>

        <label>Marks in Subject 3 (out of 100):</label>
        <input type="number" name="marks3" step="0.01" min="0" max="100" required>

        <input type="submit" value="Submit">
    </form>

    <?php if ($showResult): ?>
        <h3>Result</h3>
        <table>
            <tr><th>Name</th><td><?php echo $name; ?></td></tr>
            <tr><th>Roll Number</th><td><?php echo $roll; ?></td></tr>
            <tr><th>Marks 1</th><td><?php echo $marks1; ?></td></tr>
            <tr><th>Marks 2</th><td><?php echo $marks2; ?></td></tr>
            <tr><th>Marks 3</th><td><?php echo $marks3; ?></td></tr>
            <tr><th>Total</th><td><?php echo $total; ?></td></tr>
            <tr><th>Percentage</th><td><?php echo number_format($percentage, 2); ?>%</td></tr>
            <tr>
                <th>Result</th>
                <td class="<?php echo ($result == 'Pass') ? 'pass' : 'fail'; ?>">
                    <?php echo $result; ?>
                </td>
            </tr>
        </table>
    <?php endif; ?>
</div>
</body>
</html>