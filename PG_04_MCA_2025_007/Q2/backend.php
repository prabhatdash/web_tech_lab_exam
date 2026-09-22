<!-- A college wants to calculate the final result of a student.

Create an HTML form that accepts the student's name and marks in English, Mathematics, and Computer Science. Write PHP code to:

Calculate the average marks.
Assign a grade according to the following criteria:
Average Marks	Grade
80-100	A
60-79	B
40-59	C
Below 40	F
Display the student's result in a properly formatted HTML table. 
in 2 seperate files index.php and backend.php.
-->
<?php
    $name = $_POST['name'];
    $english = $_POST['english'];
    $mathematics = $_POST['mathematics'];
    $computer_science = $_POST['computer_science'];
    $average = ($english + $mathematics + $computer_science) / 3;
    if ($average >= 80) {
        $grade = 'A';
    } elseif ($average >= 60) {
        $grade = 'B';
    } elseif ($average >= 40) {
        $grade = 'C';
    } else {
        $grade = 'F';
    }

    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>
            <tr>
                <th>English</th>
                <td>$english</td>
            </tr>
            <tr>
                <th>Mathematics</th>
                <td>$mathematics</td>
            </tr>
            <tr>
                <th>Computer Science</th>
                <td>$computer_science</td>
            </tr>
            <tr>
                <th>Average Marks</th>
                <td>$average</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>$grade</td>
            </tr>
          </table>";
?>