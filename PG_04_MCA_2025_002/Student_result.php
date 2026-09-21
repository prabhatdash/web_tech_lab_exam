<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $mark1 = $_POST["mark1"];
    $mark2 = $_POST["mark2"];
    $mark3 = $_POST["mark3"];

    $total = $mark1 + $mark2 + $mark3;

    $percentage = ($total / 300) * 100;

    if ($percentage >= 40) {
        $result = "Pass";
    } 
    else {
        $result = "Fail";
    }
    echo "<h2>Student Result</h2>";

    echo "Student Name: $name <br>";
    echo "Roll Number: $roll <br>";
    echo "Subject 1 Marks: $mark1 <br>";
    echo "Subject 2 Marks: $mark2 <br>";
    echo "Subject 3 Marks: $mark3 <br>";

    echo "Total Marks: $total / 300 <br>";
    echo "Percentage: $percentage% <br>";
    echo "Result: $result";

} else {
?>

<h2>Student Result Form</h2>

<form method="post">

    Student Name:
    <input type="text" name="name" required>
    <br><br>

    Roll Number:
    <input type="text" name="roll" required>
    <br><br>

    Subject 1 Marks:
    <input type="number" name="mark1" required>
    <br><br>

    Subject 2 Marks:
    <input type="number" name="mark2" required>
    <br><br>

    Subject 3 Marks:
    <input type="number" name="mark3" required>
    <br><br>

    <input type="submit" name="submit" value="Calculate Result">

</form>

<?php
}
?>