
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h2>University Student Registration Form</h2>

    <form action="register.php" method="POST">

        <label>Student Name:</label>
        <input type="text" name="student_name">
        <br><br>

        <label>Roll Number:</label>
        <input type="text" name="roll_number">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email">
        <br><br>

        <label>Department:</label>
        <select name="department">
            <option value="">Select Department</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Electronics">Electronics</option>
            <option value="Mechanical">Mechanical</option>
            <option value="Civil">Civil</option>
        </select>
        <br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        <br><br>

        <label>Year of Study:</label>
        <select name="year">
            <option value="">Select Year</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
        </select>
        <br><br>

        <input type="submit" value="Register">

    </form>

</body>
</html>
```




```php
<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
</head>
<body>

    <h2>Student Registration Confirmation</h2>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $student_name = $_POST["student_name"];
        $roll_number = $_POST["roll_number"];
        $email = $_POST["email"];
        $department = $_POST["department"];
        $gender = $_POST["gender"];
        $year = $_POST["year"];

        // Check whether any required field is empty
        if (empty($student_name) || empty($roll_number) ||
            empty($email) || empty($department) ||
            empty($gender) || empty($year)) {

            echo "<p>Please fill in all the required fields.</p>";

        } else {

            echo "<h3>Registration Successful!</h3>";

            echo "<p><b>Student Name:</b> " . htmlspecialchars($student_name) . "</p>";
            echo "<p><b>Roll Number:</b> " . htmlspecialchars($roll_number) . "</p>";
            echo "<p><b>Email:</b> " . htmlspecialchars($email) . "</p>";
            echo "<p><b>Department:</b> " . htmlspecialchars($department) . "</p>";
            echo "<p><b>Gender:</b> " . htmlspecialchars($gender) . "</p>";
            echo "<p><b>Year of Study:</b> " . htmlspecialchars($year) . "</p>";
        }

    } else {

        echo "<p>Please submit the registration form first.</p>";

    }

    ?>

</body>
</html>
