<?php
session_start();

$username = "student";
$password = "12345";
$name = "Suravi";
$attendance = 82;

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        $_SESSION["loggedin"] = true;
        $_SESSION["name"] = $name;
        $_SESSION["attendance"] = $attendance;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Attendance Portal</title>
</head>
<body>

<?php if (isset($_SESSION["loggedin"])): ?>

    <h2>Welcome, <?php echo $_SESSION["name"]; ?></h2>
    <p>Attendance Percentage: <?php echo $_SESSION["attendance"]; ?>%</p>

    <?php if ($_SESSION["attendance"] >= 75): ?>
        <p>Eligible for Examination</p>
    <?php else: ?>
        <p>Not Eligible for Examination</p>
    <?php endif; ?>

    <a href="index.php?logout=true">Logout</a>

<?php else: ?>

    <h2>Student Login</h2>

    <?php if (isset($error)) echo "<p>$error</p>"; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>

<?php endif; ?>

</body>
</html>