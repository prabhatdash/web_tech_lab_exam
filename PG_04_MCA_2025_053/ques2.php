<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "student" && $password == "1234") {
        $_SESSION['name'] = "Suman";
        $_SESSION['attendance'] = 82;
    } else {
        $error = "Invalid Username or Password";
    }
}

if (isset($_SESSION['name'])) {
    echo "<h2>Welcome, " . $_SESSION['name'] . "</h2>";
    echo "<p>Attendance: " . $_SESSION['attendance'] . "%</p>";

    if ($_SESSION['attendance'] >= 75) {
        echo "<p>Eligible for Examination</p>";
    } else {
        echo "<p>Not Eligible for Examination</p>";
    }

    echo "<a href='?logout=1'>Logout</a>";
} else {
?>

<h2>Student Login</h2>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($error)) {
    echo "<p>$error</p>";
}
}
?>