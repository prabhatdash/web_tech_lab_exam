<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        input {
            width: 95%;
            padding: 8px;
            margin: 8px 0;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Student Result</h2>

    <form method="post">

        <label>Student Name:</label>
        <input type="text" name="name" required>

        <label>English Marks:</label>
        <input type="number" name="english" min="0" max="100" required>

        <label>Mathematics Marks:</label>
        <input type="number" name="math" min="0" max="100" required>

        <label>Computer Science Marks:</label>
        <input type="number" name="computer" min="0" max="100" required>

        <input type="submit" name="submit" value="Calculate Result">

    </form>

    <?php

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $english = $_POST['english'];
        $math = $_POST['math'];
        $computer = $_POST['computer'];

        $average = ($english + $math + $computer) / 3;

        if ($average >= 80) {
            $grade = "A";
        }
        elseif ($average >= 60) {
            $grade = "B";
        }
        elseif ($average >= 40) {
            $grade = "C";
        }
        else {
            $grade = "F";
        }

        echo "<table>";

        echo "<tr>
                <th>Student Name</th>
                <th>English</th>
                <th>Mathematics</th>
                <th>Computer Science</th>
                <th>Average</th>
                <th>Grade</th>
              </tr>";

        echo "<tr>
                <td>$name</td>
                <td>$english</td>
                <td>$math</td>
                <td>$computer</td>
                <td>" . number_format($average, 2) . "</td>
                <td>$grade</td>
              </tr>";

        echo "</table>";
    }
    ?>
    
</div>
</body>
</html>