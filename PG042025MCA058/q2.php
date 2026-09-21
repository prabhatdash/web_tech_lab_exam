<?php
/**
 * Question 2: Student Attendance Verification Portal
 * Roll No / ID: PG042025MCA043
 */

session_start();

// Predefined Student Records: [username => ['password', 'name', 'attendance_percent']]
$studentRecords = [
    "MCA001" => [
        "password"   => "student@123",
        "name"       => "Aarav Sharma",
        "attendance" => 84.5
    ],
    "MCA002" => [
        "password"   => "exampass!99",
        "name"       => "Priya Patel",
        "attendance" => 71.0
    ],
    "MCA003" => [
        "password"   => "welcome2026",
        "name"       => "Rahul Verma",
        "attendance" => 92.0
    ]
];

$errorMessage = "";
$usernameInput = "";

// Handle Logout Action
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
    header("Location: q2.php");
    exit();
}

// Handle Login Submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usernameInput = trim($_POST["username"] ?? "");
    $passwordInput = trim($_POST["password"] ?? "");

    if ($usernameInput === "" || $passwordInput === "") {
        $errorMessage = "Please provide both Student ID and Password.";
    } elseif (
        isset($studentRecords[$usernameInput]) &&
        $studentRecords[$usernameInput]["password"] === $passwordInput
    ) {
        // Successful authentication
        $_SESSION["student_logged_in"] = true;
        $_SESSION["student_id"]         = $usernameInput;
        $_SESSION["student_name"]       = $studentRecords[$usernameInput]["name"];
        $_SESSION["attendance"]         = $studentRecords[$usernameInput]["attendance"];
        header("Location: q2.php");
        exit();
    } else {
        $errorMessage = "Invalid Student ID or Password. Please try again.";
    }
}

$isLoggedIn = isset($_SESSION["student_logged_in"]) && $_SESSION["student_logged_in"] === true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2 - Student Attendance Portal | PG042025MCA043</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #f0fdf4 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
        }
        .container {
            background: #ffffff;
            width: 100%;
            max-width: 780px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .header {
            background: linear-gradient(135deg, #065f46 0%, #059669 100%);
            color: #ffffff;
            padding: 24px 30px;
            text-align: center;
        }
        .header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 6px;
        }
        .header p {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        .content {
            padding: 30px;
        }
        .alert-error {
            background-color: #fee2e2;
            border: 1px solid #fca5a5;
            color: #991b1b;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            margin-bottom: 24px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        .form-group.full-width {
            grid-column: span 2;
        }
        label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 11px 14px;
            border: 2px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.95rem;
            color: #1e293b;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #059669;
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.2);
        }
        .btn-group {
            display: flex;
            gap: 12px;
        }
        button, .btn-action {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.2s;
        }
        .btn-submit {
            background-color: #059669;
            color: #ffffff;
        }
        .btn-submit:hover {
            background-color: #047857;
        }
        .btn-logout {
            background-color: #dc2626;
            color: #ffffff;
            display: inline-block;
            max-width: 220px;
        }
        .btn-logout:hover {
            background-color: #b91c1c;
        }
        .demo-credentials {
            margin-top: 24px;
            background-color: #f8fafc;
            border-left: 4px solid #059669;
            padding: 12px 16px;
            border-radius: 4px;
            font-size: 0.85rem;
            color: #334155;
            line-height: 1.6;
        }
        .demo-credentials code {
            background: #e2e8f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: Consolas, monospace;
        }
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            margin-bottom: 24px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .portal-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            background: #ffffff;
            border: 1px solid #cbd5e1;
        }
        .portal-table th, 
        .portal-table td {
            border: 1px solid #cbd5e1;
            padding: 12px 16px;
            text-align: left;
        }
        .portal-table th {
            background-color: #065f46;
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.82rem;
            letter-spacing: 0.5px;
        }
        .portal-table tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .text-right {
            text-align: right !important;
        }
        .text-center {
            text-align: center !important;
        }
        .badge-eligible {
            background-color: #dcfce7;
            color: #15803d;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 700;
            border: 1px solid #86efac;
            display: inline-block;
        }
        .badge-ineligible {
            background-color: #fee2e2;
            color: #b91c1c;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 700;
            border: 1px solid #fca5a5;
            display: inline-block;
        }
        .footer {
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            padding: 14px;
            text-align: center;
            font-size: 0.82rem;
            color: #64748b;
        }
        @media (max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            .form-group.full-width {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Student Examination Eligibility Portal</h1>
        <p>Lab Exam - Question 2 | Roll No: PG042025MCA043</p>
    </div>

    <div class="content">
        <?php if (!empty($errorMessage)): ?>
            <div class="alert-error">
                <strong>Error:</strong> <?= htmlspecialchars($errorMessage) ?>
            </div>
        <?php endif; ?>

        <?php if ($isLoggedIn): ?>
            <?php 
                $attendance = (float)$_SESSION["attendance"];
                $isEligible = $attendance >= 75.0;
            ?>

            <div class="table-responsive">
                <table class="portal-table">
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th class="text-right">Student Record Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Student ID / Roll No</strong></td>
                            <td class="text-right"><strong><?= htmlspecialchars($_SESSION["student_id"]) ?></strong></td>
                        </tr>
                        <tr>
                            <td>Student Full Name</td>
                            <td class="text-right"><?= htmlspecialchars($_SESSION["student_name"]) ?></td>
                        </tr>
                        <tr>
                            <td>Recorded Attendance</td>
                            <td class="text-right"><strong><?= number_format($attendance, 2) ?>%</strong></td>
                        </tr>
                        <tr>
                            <td>Examination Requirement</td>
                            <td class="text-right">Minimum 75.00%</td>
                        </tr>
                        <tr>
                            <td><strong>Eligibility Status</strong></td>
                            <td class="text-right">
                                <?php if ($isEligible): ?>
                                    <span class="badge-eligible">Eligible for Examination</span>
                                <?php else: ?>
                                    <span class="badge-ineligible">Not Eligible for Examination</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="text-align: right;">
                <a href="q2.php?action=logout" class="btn-action btn-logout">Logout Student</a>
            </div>

        <?php else: ?>
            <form action="q2.php" method="POST">
                <div class="form-grid">
                    <div class="form-group full-width">
                        <label for="username">Student ID / Username:</label>
                        <input 
                            type="text" 
                            id="username" 
                            name="username" 
                            value="<?= htmlspecialchars($usernameInput) ?>" 
                            placeholder="e.g. MCA001" 
                            required 
                            autofocus
                        >
                    </div>

                    <div class="form-group full-width">
                        <label for="password">Password:</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Enter password" 
                            required
                        >
                    </div>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn-submit">Login & Verify Eligibility</button>
                </div>
            </form>

            <div class="demo-credentials">
                <strong>Predefined Test Credentials:</strong><br>
                &bull; <code>MCA001</code> / <code>student@123</code> &rarr; Aarav Sharma (84.50% &mdash; Eligible)<br>
                &bull; <code>MCA002</code> / <code>exampass!99</code> &rarr; Priya Patel (71.00% &mdash; Not Eligible)<br>
                &bull; <code>MCA003</code> / <code>welcome2026</code> &rarr; Rahul Verma (92.00% &mdash; Eligible)
            </div>
        <?php endif; ?>
    </div>

    <div class="footer">
        Web Technology Lab Exam &bull; PHP & HTML5 &bull; Candidate: PG042025MCA043
    </div>
</div>

</body>
</html>