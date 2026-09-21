<?php
$name = $english = $maths = $cs = "";
$showResult = false;
$total = $average = 0;
$grade = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim($_POST['name']);
    $english = (float)$_POST['english'];
    $maths   = (float)$_POST['maths'];
    $cs      = (float)$_POST['cs'];

    if ($name !== '' && $english !== null && $maths !== null && $cs !== null) {
        $total   = $english + $maths + $cs;
        $average = $total / 3;

        if ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 60) {
            $grade = 'B';
        } elseif ($average >= 40) {
            $grade = 'C';
        } else {
            $grade = 'F';
        }

        $showResult = true;
    }
}

$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Result</title>
<style>
    body { font-family: Arial, sans-serif; background: #f4f6f8; }
    .container { max-width: 450px; margin: 50px auto; background: #fff;
                 padding: 25px 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    h2 { text-align: center; color: #333; }
    label { display: block; margin-top: 12px; font-weight: bold; color: #555; }
    input[type="text"], input[type="number"] {
        width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc;
        border-radius: 4px; box-sizing: border-box;
    }
    input[type="submit"] {
        margin-top: 20px; width: 100%; padding: 10px; background: #2d6cdf;
        color: #fff; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;
    }
    input[type="submit"]:hover { background: #1d54b3; }
    table { width: 100%; border-collapse: collapse; margin-top: 25px; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    th { background: #2d6cdf; color: #fff; }
    tr:nth-child(even) { background: #f9f9f9; }
    .grade { font-size: 18px; font-weight: bold; }
</style>
</head>
<body>

<div class="container">
    <h2>Student Result Entry</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Student Name</label>
        <input type="text" id="name" name="name" value="<?php echo $safeName; ?>" required>

        <label for="english">English Marks (0-100)</label>
        <input type="number" id="english" name="english" min="0" max="100" value="<?php echo $english ? htmlspecialchars($english) : ''; ?>" required>

        <label for="maths">Mathematics Marks (0-100)</label>
        <input type="number" id="maths" name="maths" min="0" max="100" value="<?php echo $maths ? htmlspecialchars($maths) : ''; ?>" required>

        <label for="cs">Computer Science Marks (0-100)</label>
        <input type="number" id="cs" name="cs" min="0" max="100" value="<?php echo $cs ? htmlspecialchars($cs) : ''; ?>" required>

        <input type="submit" value="Calculate Result">
    </form>

    <?php if ($showResult): ?>
    <h2>Result for <?php echo $safeName; ?></h2>
    <table>
        <tr>
            <th>Subject</th>
            <th>Marks</th>
        </tr>
        <tr>
            <td>English</td>
            <td><?php echo $english; ?></td>
        </tr>
        <tr>
            <td>Mathematics</td>
            <td><?php echo $maths; ?></td>
        </tr>
        <tr>
            <td>Computer Science</td>
            <td><?php echo $cs; ?></td>
        </tr>
        <tr>
            <td><strong>Total</strong></td>
            <td><strong><?php echo $total; ?></strong></td>
        </tr>
        <tr>
            <td><strong>Average</strong></td>
            <td><strong><?php echo number_format($average, 2); ?></strong></td>
        </tr>
        <tr>
            <td><strong>Grade</strong></td>
            <td class="grade"><?php echo $grade; ?></td>
        </tr>
    </table>
    <?php endif; ?>
</div>

</body>
</html>