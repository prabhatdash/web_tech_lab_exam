<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
</head>
<body>

    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Roll Number: <input type="text" name="roll"><br><br>
        Marks in Subject 1: <input type="text" name="sub1"><br><br>
        Marks in Subject 2: <input type="text" name="sub2"><br><br>
        Marks in Subject 3: <input type="text" name="sub3"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];

        $total = $sub1 + $sub2 + $sub3;
        $percentage = $total / 3;

        if ($percentage >= 40) {
            $result = "Pass";
        } else {
            $result = "Fail";
        }

        echo "<h3>Student Details</h3>";
        echo "Name: " . $name . "<br>";
        echo "Roll Number: " . $roll . "<br>";
        echo "Total Marks: " . $total . "<br>";
        echo "Percentage: " . $percentage . "%<br>";
        echo "Result: " . $result . "<br>";
    }
    ?>

</body>
</html>
