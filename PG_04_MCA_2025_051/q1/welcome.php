<?php
session_start();

if(isset($_POST["name"])){
    $name = trim($_POST["name"]);
    $_SESSION["name"]  =  $name;
}

if(!isset($_SESSION["name"]) || $_SESSION["name"]  ==  ''){
    header("Location: login.php");
    exit;
}

if(isset($_GET["logout"])){
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome Page</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION["name"]); ?>!</h2>

<a href="welcome.php?logout=true">Logout</a>

</body>
</html>