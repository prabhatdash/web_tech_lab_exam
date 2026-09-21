<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<?php if (isset($_SESSION["name"])): ?>

    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["name"]); ?></h2>
    <a href="index.php?logout=true">Logout</a>

<?php else: ?>

    <h2>Login</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Enter your name" required>
        <button type="submit">Login</button>
    </form>

<?php endif; ?>

</body>
</html>