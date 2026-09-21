<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post">
    Student Name: <input type="text" name="name"><br><br>
    Roll Number: <input type="text" name="roll"><br><br>
    Email: <input type="email" name="email"><br><br>

    Department:
    <select name="dept">
        <option value="">Select</option>
        <option>CSE</option>
        <option>MCA</option>
        <option>ECE</option>
    </select>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Year of Study:
    <select name="year">
        <option value="">Select</option>
        <option>1st Year</option>
        <option>2nd Year</option>
        <option>3rd Year</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Register">
</form>

<?php
if(isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $roll = trim($_POST['roll']);
    $email = trim($_POST['email']);
    $dept = $_POST['dept'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $year = $_POST['year'];

    
    if($name=="" || $roll=="" || $email=="" || $dept=="" || $gender=="" || $year=="") {
        echo "<p class='error'>All fields are required!</p>";
    } 
    else {
        echo "<div class='box'>";
        echo "<h3>Registration Confirmation</h3>";
        echo "Name: ".$name."<br>";
        echo "Roll Number: ".$roll."<br>";
        echo "Email: ".$email."<br>";
        echo "Department: ".$dept."<br>";
        echo "Gender: ".$gender."<br>";
        echo "Year: ".$year."<br>";
        echo "</div>";
    }
}
?>

</body>
</html>