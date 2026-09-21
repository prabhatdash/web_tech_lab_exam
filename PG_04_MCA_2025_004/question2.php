<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>

    <form method="post">
        Name: <input type="text" name="name"><br><br>
        English Marks: <input type="text" name="english"><br><br>
        Mathematics Marks: <input type="text" name="maths"><br><br>
        Computer Science Marks: <input type="text" name="computer"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $english = $_POST['english'];
        $maths = $_POST['maths'];
        $computer = $_POST['computer'];

        $average = ($english + $maths + $computer) / 3;

        if ($average >= 80) {
            $grade = "A";
        } elseif ($average >= 60) {
            $grade = "B";
        } elseif ($average >= 40) {
            $grade = "C";
        } else {
            $grade = "F";
        }

        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>English</th><th>Mathematics</th><th>Computer Science</th><th>Average</th><th>Grade</th></tr>";
        echo "<tr><td>$name</td><td>$english</td><td>$maths</td><td>$computer</td><td>$average</td><td>$grade</td></tr>";
        echo "</table>";
    }
    ?>

</body>
</html>
