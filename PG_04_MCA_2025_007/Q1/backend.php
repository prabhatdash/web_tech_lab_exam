<?php
        $name = $_POST['name'];
        $roll_number = $_POST['roll_number'];
        $s1 = $_POST['s1'];
        $s2 = $_POST['s2'];
        $s3 = $_POST['s3'];

        $total = $s1 + $s2 + $s3;
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