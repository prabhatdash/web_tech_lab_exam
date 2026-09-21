<?php
session_start();
if(isset($_POST["name"])){
    $_SESSION["name"]=$_POST["name"];
    header("Location: welcome.php");
}
?>
<form method="post">
<input type="text" name="name" placeholder="Enter your Name">
<input type="submit" value="Login">
</form>