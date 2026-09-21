<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $roll = trim($_POST["roll"]);
    $email = trim($_POST["email"]);
    $department = trim($_POST["department"]);
    $gender = trim($_POST["gender"] ?? "");
    $year = trim($_POST["year"]);

    if (empty($name) || empty($roll) || empty($email) ||
        empty($department) || empty($gender) || empty($year)) {

        echo "<h2>Error</h2>";
        echo "<p>Please fill in all required fields.</p>";
        echo '<a href="index.html">Go Back</a>';

    } else {

        echo "<h2>Registration Confirmation</h2>";

        echo "<p><strong>Student Name:</strong> $name</p>";
        echo "<p><strong>Roll Number:</strong> $roll</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Department:</strong> $department</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Year of Study:</strong> $year</p>";

        echo "<h3>Registration Successful!</h3>";
    }

} else {
    echo "Invalid request.";
}

?>