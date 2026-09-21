<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$attendance = $_SESSION['attendance'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Your Attendance: <?php echo $attendance; ?>%</p>
    <p>
        <?php
        if ($attendance >= 75) {
            echo "Eligible for Examination";
        } else {
            echo "Not Eligible for Examination";
        }
        ?>
    </p>
    <a href="index.php?logout=true">Logout</a>
</body>
</html>
