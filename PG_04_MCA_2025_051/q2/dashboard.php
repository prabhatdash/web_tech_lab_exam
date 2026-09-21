<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION["student_name"];
$attendance = $_SESSION["attendance"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($name); ?></h2>
    <p>Attendance: <?php echo $attendance; ?>%</p>

    <?php if ($attendance >= 75) { ?>
        <p style="color:green;"><strong>can sit for Examination</strong></p>
    <?php } else { ?>
        <p style="color:red;"><strong>cannot sit for Examination</strong></p>
    <?php } ?>

    <a href="logout.php">Logout</a>
</body>
</html>