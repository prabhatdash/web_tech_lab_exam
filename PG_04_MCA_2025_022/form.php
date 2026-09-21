<?php
// Initialize variables and error messages
$errors = [];
$submitted = false;
$name = $email = $age = $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Trim input data to remove extra whitespace
    $name  = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $age   = isset($_POST['age']) ? trim($_POST['age']) : '';
    $city  = isset($_POST['city']) ? trim($_POST['city']) : '';

    // Validation: Check if any field is empty
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    }
    if (empty($age)) {
        $errors[] = "Age is required.";
    }
    if (empty($city)) {
        $errors[] = "City is required.";
    }

    // If no errors, set flag to show results
    if (empty($errors)) {
        $submitted = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Information Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        .container { max-width: 500px; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;
        }
        input[type="submit"] { background: #28a745; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background: #218838; }
        .error { color: #dc3545; background: #f8d7da; padding: 10px; border-radius: 4px; margin-bottom: 15px; }
        .result-table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .result-table th, .result-table td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        .result-table th { background-color: #007bff; color: white; }
    </style>
</head>
<body>

<div class="container">
    <?php if ($submitted): ?>
        <h2>Submitted Information</h2>
        <p style="color: green; font-weight: bold;">Form submitted successfully!</p>
        <table class="result-table">
            <tr><th>Field</th><th>Submitted Value</th></tr>
            <tr><td>Name</td><td><?php echo htmlspecialchars($name); ?></td></tr>
            <tr><td>Email</td><td><?php echo htmlspecialchars($email); ?></td></tr>
            <tr><td>Age</td><td><?php echo htmlspecialchars($age); ?></td></tr>
            <tr><td>City</td><td><?php echo htmlspecialchars($city); ?></td></tr>
        </table>
        <p><a href="q1_form.php">Fill Form Again</a></p>

    <?php else: ?>
        <h2>User Information Form</h2>

        <?php if (!empty($errors)): ?>
            <div class="error">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" value="<?php echo htmlspecialchars($age); ?>">
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($city); ?>">
            </div>

            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>
</div>

</body>
</html>