<?php
session_start();
if(isset($_POST["user"])){
    if($_POST["user"]=="sakil" && $_POST["pass"]=="8675"){
        $_SESSION["name"]="sakil";
        $_SESSION["attendance"]=80;
        header("Location: welcome.php");
    }else{
        echo "Invalid username  or Password";
    }
}
?>

<form method="post">
<input type="text" name="user" placeholder="username">
<input type="password" name="pass" placeholder="Password">
<input type="submit" value="Login">
</form>