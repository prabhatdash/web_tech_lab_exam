<!DOCTYPE html>
<head>
    <title>Registration Confirmation</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_name = trim($_POST["student_name"] ?? "");
    $roll_number  = trim($_POST["roll_number"] ?? "");
    $email        = trim($_POST["email"] ?? "");
    $department   = trim($_POST["department"] ?? "");
    $gender       = trim($_POST["gender"] ?? "");
    $year         = trim($_POST["year"] ?? "");

    if (
        empty($student_name) ||
        empty($roll_number) ||
        empty($email) ||
        empty($department) ||
        empty($gender) ||
        empty($year)
    ) {
        echo "<h2 class='error'>Error</h2>";
        echo "<p class='error'>All fields are required. Please fill in all the details.</p>";
    } else {
        echo "<h2>Registration Successful</h2>";


        echo "<p><strong>Student Name:</strong> " .
             htmlspecialchars($student_name) . "</p>";

        echo "<p><strong>Roll Number:</strong> " .
             htmlspecialchars($roll_number) . "</p>";

        echo "<p><strong>Email:</strong> " .
             htmlspecialchars($email) . "</p>";

        echo "<p><strong>Department:</strong> " .
             htmlspecialchars($department) . "</p>";

        echo "<p><strong>Gender:</strong> " .
             htmlspecialchars($gender) . "</p>";

        echo "<p><strong>Year of Study:</strong> " .
             htmlspecialchars($year) . "</p>";
    }
} else {
    echo "<h2 class='error'>Invalid Request</h2>";
    echo "<p class='error'>Please submit the registration form.</p>";

}
?>
</body>
</html>
