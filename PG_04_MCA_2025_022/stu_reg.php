<?php
// Initialize variables and error tracker
$errors = [];
$isSubmitted = false;

// Prefill inputs on error
$student_name = $roll_number = $email = $department = $gender = $year_of_study = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and trim inputs
    $student_name  = isset($_POST['student_name']) ? trim($_POST['student_name']) : '';
    $roll_number   = isset($_POST['roll_number']) ? trim($_POST['roll_number']) : '';
    $email         = isset($_POST['email']) ? trim($_POST['email']) : '';
    $department    = isset($_POST['department']) ? trim($_POST['department']) : '';
    $gender        = isset($_POST['gender']) ? trim($_POST['gender']) : '';
    $year_of_study = isset($_POST['year_of_study']) ? trim($_POST['year_of_study']) : '';

    // Validation: Check if required fields are empty
    if (empty($student_name)) {
        $errors[] = "Student Name is required.";
    }
    if (empty($roll_number)) {
        $errors[] = "Roll Number is required.";
    }
    if (empty($email)) {
        $errors[] = "Email Address is required.";
    }
    if (empty($department)) {
        $errors[] = "Department selection is required.";
    }
    if (empty($gender)) {
        $errors[] = "Gender selection is required.";
    }
    if (empty($year_of_study)) {
        $errors[] = "Year of Study selection is required.";
    }

    // Process if no validation errors exist
    if (count($errors) === 0) {
        $isSubmitted = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Student Registration</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef2f5;
            margin: 0;
            padding: 30px;
        }
        .box {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #1a365d;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #2d3748;
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e0;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }
        .radio-group label {
            font-weight: normal;
        }
        .btn-submit {
            width: 100%;
            background-color: #2b6cb0;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-submit:hover {
            background-color: #2c5282;
        }
        .error-box {
            background-color: #fed7d7;
            border-left: 4px solid #e53e3e;
            color: #9b2c2c;
            padding: 12px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }
        /* Registration Receipt Styling */
        .receipt-card {
            border: 2px dashed #2b6cb0;
            padding: 20px;
            border-radius: 8px;
            background-color: #f7fafc;
        }
        .receipt-header {
            text-align: center;
            border-bottom: 2px solid #2b6cb0;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .receipt-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #e2e8f0;
        }
        .receipt-label {
            font-weight: bold;
            color: #4a5568;
        }
        .receipt-value {
            color: #1a202c;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #4a5568;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="box">
    <?php if ($isSubmitted): ?>
        <!-- Formatted Registration Confirmation Page -->
        <div class="receipt-card">
            <div class="receipt-header">
                <h2 style="margin:0; color:#2b6cb0;">Registration Confirmation</h2>
                <p style="margin:5px 0 0 0; color:#718096; font-size:14px;">University Student Portal</p>
            </div>

            <div class="receipt-row">
                <span class="receipt-label">Student Name:</span>
                <span class="receipt-value"><?php echo htmlspecialchars($student_name); ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Roll Number:</span>
                <span class="receipt-value"><?php echo htmlspecialchars($roll_number); ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Email Address:</span>
                <span class="receipt-value"><?php echo htmlspecialchars($email); ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Department:</span>
                <span class="receipt-value"><?php echo htmlspecialchars($department); ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Gender:</span>
                <span class="receipt-value"><?php echo htmlspecialchars($gender); ?></span>
            </div>
            <div class="receipt-row">
                <span class="receipt-label">Year of Study:</span>
                <span class="receipt-value"><?php echo htmlspecialchars($year_of_study); ?></span>
            </div>
        </div>
        <div style="text-align: center;">
            <a href="student_registration.php" class="back-btn">Register Another Student</a>
        </div>

    <?php else: ?>
        <!-- Student Registration Form -->
        <h2>Online Student Registration</h2>

        <?php if (!empty($errors)): ?>
            <div class="error-box">
                <strong>Please fix the following errors:</strong>
                <ul>
                    <?php foreach ($errors as $err): ?>
                        <li><?php echo $err; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="student_name">Student Name *</label>
                <input type="text" id="student_name" name="student_name" value="<?php echo htmlspecialchars($student_name); ?>">
            </div>

            <div class="form-group">
                <label for="roll_number">Roll Number *</label>
                <input type="text" id="roll_number" name="roll_number" value="<?php echo htmlspecialchars($roll_number); ?>">
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            </div>

            <div class="form-group">
                <label for="department">Department *</label>
                <select id="department" name="department">
                    <option value="">-- Select Department --</option>
                    <option value="Computer Science" <?php if($department == "Computer Science") echo "selected"; ?>>Computer Science</option>
                    <option value="Electrical Engineering" <?php if($department == "Electrical Engineering") echo "selected"; ?>>Electrical Engineering</option>
                    <option value="Mechanical Engineering" <?php if($department == "Mechanical Engineering") echo "selected"; ?>>Mechanical Engineering</option>
                    <option value="Civil Engineering" <?php if($department == "Civil Engineering") echo "selected"; ?>>Civil Engineering</option>
                    <option value="Business Administration" <?php if($department == "Business Administration") echo "selected"; ?>>Business Administration</option>
                </select>
            </div>

            <div class="form-group">
                <label>Gender *</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"; ?>> Male</label>
                    <label><input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"; ?>> Female</label>
                    <label><input type="radio" name="gender" value="Other" <?php if($gender == "Other") echo "checked"; ?>> Other</label>
                </div>
            </div>

            <div class="form-group">
                <label for="year_of_study">Year of Study *</label>
                <select id="year_of_study" name="year_of_study">
                    <option value="">-- Select Year --</option>
                    <option value="1st Year" <?php if($year_of_study == "1st Year") echo "selected"; ?>>1st Year</option>
                    <option value="2nd Year" <?php if($year_of_study == "2nd Year") echo "selected"; ?>>2nd Year</option>
                    <option value="3rd Year" <?php if($year_of_study == "3rd Year") echo "selected"; ?>>3rd Year</option>
                    <option value="4th Year" <?php if($year_of_study == "4th Year") echo "selected"; ?>>4th Year</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">Submit Registration</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>