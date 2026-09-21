<!DOCTYPE html>
<html>
<head>
    <title>Lab Exam Submission</title>
</head>
<body>
<h2>Roll: pg_04_mca_2025_025</h2>




<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Age: <input type="number" name="age"><br><br>
    City: <input type="text" name="city"><br><br>
    <input type="submit" name="q1_submit" value="Submit">
</form>
</html>

<?php
if(isset($_POST['q1_submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']); 
    $city = trim($_POST['city']);
    
    if($name=="" || $email=="" || $age=="" || $city=="") {
        echo "<p class='error'>Please fill all fields.</p>";
    } else {
        echo "<div class='result'>";
        echo "Name: ".$name."<br>";
        echo "Email: ".$email."<br>";
        echo "Age: ".$age."<br>";
        echo "City: ".$city."<br>";
        echo "</div>";
    }
}
?>



