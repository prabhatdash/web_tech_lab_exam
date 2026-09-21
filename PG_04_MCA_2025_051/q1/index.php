<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <form action="welcome.php" method="POST">
        Enter your name: <input type="text" name="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>