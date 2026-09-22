<?php
$error = "";
$success =false;

if (isset($_POST['register_btn'])) {
    
    $student_name = trim($_POST['student_name'] ?? '');
    $roll_no =trim($_POST['roll_no'] ?? '');
    $email = trim($_POST[ 'email' ] ?? '');
    $department = trim($_POST[ 'department' ] ?? '');
    $gender =trim($_POST['gender'] ?? '');
    $year = trim($_POST[ 'year'] ?? '');

    
    if ($student_name == "" || $roll_no == "" || $email == "" || $department == "" || $gender == "" || $year == "") {
        $error = " Error: All fields are mandatory. Please fill all the details !!!";
    } else {
        $success =true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title >University Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .form-box {
            width:400px;
            padding : 15px;
            border:1px solid #999;
        }
        .error-msg {
            color: red;
            font-weight: bold;
            margin-bottom: 15px;
        }
        table {
            width: 450px;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php if ($success): ?>


    <h2>Registration Confirmation</h2>
    <p style="color:green; font-weight: bold;">Registration Form submitted successfully!</p>

    <table>
        <tr>
            <th>Field</th>
            <th>Details </th>
        </tr>
        <tr>
            <td>Student Name</td>
            <td><?php echo htmlspecialchars($student_name); ?></td>
        </tr>
        <tr>
            <td>Roll Number</td>
            <td><?php echo htmlspecialchars($roll_no); ?></td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>
        <tr>
            <td>Department</td>
            <td><?php echo htmlspecialchars($department); ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo htmlspecialchars($gender); ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo htmlspecialchars($year); ?></td>
        </tr>
    </table>

    <br>
    <a href="student_register.php">Register for Another Student</a>

<?php else: ?>

    <h2>University Student Registration Form</h2>

    <?php if (!empty($error)): ?>
        <div class="error-msg"><?php echo $error; ?></div>
    <?php endif; ?>

    <div class="form-box">
        <form method="POST" action="student_register.php">

            <label>Student Name:</label><br>
            <input type="text" name="student_name" style="width:95%;"><br><br>

            <label>Roll Number:</label><br>
            <input type="text" name="roll_no" style="width:95%;"><br><br>

            <label>Email ID:</label><br>
            <input type="email" name="email" style="width:95%;"><br><br>

            <label>Department:</label><br>
            <select name="department" style="width:98%;">
                <option value="">-- Select Department --</option>
                <option value="CSE">CSE</option>
                <option value="M.Tech">M.Tech</option>
                <option value="B.Tech">B.Tech</option>
                <option value="MCA">MCA</option>
                <option value="BCA">BCA</option>
            </select><br><br>

            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <br><br>

            <label>Year of Study:</label><br>
            <select name="year" style="width:98%;">
                <option value="">-- Select Year --</option>
                <option value="1st Year">1st Year</option>
                <option value="2nd Year">2nd Year</option>
                <option value="3rd Year">3rd Year</option>
                <option value="4th Year">4th Year</option>
            </select><br><br>

            <input type="submit" name="register_btn" value="Register Student">
        </form>
    </div>

<?php endif; ?>

</body>
</html>