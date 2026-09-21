<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receive form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $age = trim($_POST["age"]);
    $city = trim($_POST["city"]);

    // Check if any field is empty
    if (empty($name) || empty($email) || empty($age) || empty($city)) {

        echo "<h2>Error</h2>";
        echo "<p>Please fill in all the fields.</p>";
        echo '<a href="index.html">Go Back</a>';

    } else {

        // Display submitted information
        echo "<h2>Submitted Information</h2>";

        echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Age:</strong> " . htmlspecialchars($age) . "</p>";
        echo "<p><strong>City:</strong> " . htmlspecialchars($city) . "</p>";
    }

} else {

    echo "Invalid request.";
}

?>
