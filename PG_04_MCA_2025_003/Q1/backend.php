<?php
    $name = $_POST['name'];
    $roll_number = $_POST['roll_number'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];

    $total = $subject1 + $subject2 + $subject3;
    $percentage = ($total / 300) * 100;
    if ($percentage >= 40) {
        $result = "Pass";
        } else {
            $result = "Fail";
        }

        echo "<p>Student: " . $name . "</p>";
        echo "<p>Roll Number: " . $roll_number . "</p>";
        echo "<p>Total Marks: " . $total . "</p>";
        echo "<p>Percentage: " . $percentage . "%</p>";
        echo "<p>Result: " . $result . "</p>";
?>