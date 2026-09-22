<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name =trim($_POST['name']);
    $email= trim($_POST[ 'email']);
    $age= trim($_POST[ 'age']);
    $city =trim($_POST[ 'city']);

    if (empty($name ) || empty($email) || empty($age) || empty($city )) {
        echo "<h3 style='color:red;'>Error: All fields are required! Please go back and fill out everything.</h3>";
        echo "<a href='index.html'>Back to Form</a>";
    } else {
?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Submitted Details</title>
        </head>
        <body>
            <h2>Submitted Information Details</h2>
            <p><strong>Name :</strong> <?php echo htmlspecialchars($name ); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Age :</strong> <?php echo htmlspecialchars($age); ?></p>
            <p><strong>City:</strong> <?php echo htmlspecialchars($city ); ?></p>

            <br>
            <a href="index.html"> Submit another response </a>
        </body>
        </html>
<?php
    }
} else {
    
    header("Location: index.html");
    exit();
}
?>