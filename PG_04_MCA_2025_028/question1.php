<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
</head>
<body>

    <h2>Student Information</h2>

    <form action="process.php" method="POST">

        <label>Name:</label>
        <input type="text" name="name">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email">
        <br><br>

        <label>Age:</label>
        <input type="number" name="age">
        <br><br>

        <label>City:</label>
        <input type="text" name="city">
        <br><br>

        <input type="submit" value="Submit">

    </form>

</body>
</html>





<!DOCTYPE html>
<html>
<head>
    <title>Submitted Information</title>
</head>
<body>

    <h2>Submitted Information</h2>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $city = $_POST["city"];

        // Check if any field is empty
        if (empty($name) || empty($email) || empty($age) || empty($city)) {

            echo "<p>Please fill in all the fields.</p>";

        } else {

            echo "<p><b>Name:</b> " . htmlspecialchars($name) . "</p>";
            echo "<p><b>Email:</b> " . htmlspecialchars($email) . "</p>";
            echo "<p><b>Age:</b> " . htmlspecialchars($age) . "</p>";
            echo "<p><b>City:</b> " . htmlspecialchars($city) . "</p>";
        }
    }

    ?>

</body>
</html>