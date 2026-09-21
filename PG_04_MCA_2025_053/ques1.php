<?php
session_start();

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $_SESSION['name'] = $name;

    header("Location: index.php");
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
</head>
<body>

<?php
if (isset($_SESSION['name'])) {
?>

    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?></h2>

    <a href="index.php?logout=true">Logout</a>

<?php
} else {
?>

    <h2>Login Page</h2>

    <form method="post" action="">
        <label>Enter your name:</label>
        <input type="text" name="name" required>

        <br><br>

        <input type="submit" name="login" value="Login">
    </form>

<?php
}
?>

</body>
</html>