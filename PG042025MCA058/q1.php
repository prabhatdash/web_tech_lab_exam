<?php
/**
 * Question 1: User Session Login & Welcome Dashboard
 * Roll No / ID: PG042025MCA043
 */

session_start();

$userNameInput = "";
$errorMessage = "";
$successMessage = "";

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
    header("Location: q1.php?logged_out=1");
    exit();
}

// Display feedback on successful logout redirect
if (isset($_GET['logged_out']) && $_GET['logged_out'] === '1') {
    $successMessage = "You have been successfully logged out. Session destroyed.";
}

// Handle Login Form Submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userNameInput = trim($_POST["user_name"] ?? "");

    if ($userNameInput === "") {
        $errorMessage = "Please enter your name to proceed.";
    } elseif (strlen($userNameInput) < 2) {
        $errorMessage = "Name must contain at least 2 characters.";
    } else {
        // Store user in PHP session and redirect
        $_SESSION["user_name"] = htmlspecialchars($userNameInput, ENT_QUOTES, 'UTF-8');
        $_SESSION["login_time"] = date("Y-m-d H:i:s");
        header("Location: q1.php");
        exit();
    }
}

$isLoggedIn = isset($_SESSION["user_name"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1 - Session Login & Welcome | PG042025MCA043</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #eff6ff 0%, #e2e8f0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
        }
        .container {
            background: #ffffff;
            width: 100%;
            max-width: 650px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .header {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
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
        .alert-success {
            background-color: #ecfdf5;
            border: 1px solid #6ee7b7;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }
        input[type="text"] {
            width: 100%;
            padding: 11px 14px;
            border: 2px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.95rem;
            color: #1e293b;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }
        .btn-submit {
            width: 100%;
            background-color: #2563eb;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-submit:hover {
            background-color: #1d4ed8;
        }
        .welcome-card {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 24px;
            text-align: center;
        }
        .welcome-title {
            font-size: 1.6rem;
            color: #1e293b;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .welcome-name {
            color: #2563eb;
        }
        .welcome-meta {
            color: #64748b;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }
        .btn-logout {
            display: inline-block;
            background-color: #ef4444;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: background-color 0.2s;
        }
        .btn-logout:hover {
            background-color: #dc2626;
        }
        .footer {
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            padding: 14px;
            text-align: center;
            font-size: 0.82rem;
            color: #64748b;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>User Session Management</h1>
        <p>Lab Exam - Question 1 | Roll No: PG042025MCA043</p>
    </div>

    <div class="content">
        <?php if (!empty($errorMessage)): ?>
            <div class="alert-error">
                <strong>Error:</strong> <?= htmlspecialchars($errorMessage) ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($successMessage)): ?>
            <div class="alert-success">
                <?= htmlspecialchars($successMessage) ?>
            </div>
        <?php endif; ?>

        <?php if ($isLoggedIn): ?>
            <div class="welcome-card">
                <div class="welcome-title">
                    Welcome, <span class="welcome-name"><?= $_SESSION["user_name"] ?></span>!
                </div>
                <p class="welcome-meta">
                    Your session is active. Session ID: <code><?= session_id() ?></code><br>
                    Logged in at: <strong><?= htmlspecialchars($_SESSION["login_time"]) ?></strong>
                </p>
                <a href="q1.php?action=logout" class="btn-logout">Logout & Destroy Session</a>
            </div>
        <?php else: ?>
            <form action="q1.php" method="POST">
                <div class="form-group">
                    <label for="user_name">Enter Full Name:</label>
                    <input 
                        type="text" 
                        id="user_name" 
                        name="user_name" 
                        value="<?= htmlspecialchars($userNameInput) ?>" 
                        placeholder="e.g. Ramesh Kumar" 
                        required 
                        autofocus
                    >
                </div>
                <button type="submit" class="btn-submit">Login & Start Session</button>
            </form>
        <?php endif; ?>
    </div>

    <div class="footer">
        Web Technology Lab Exam &bull; PHP & HTML5 &bull; Candidate: PG042025MCA043
    </div>
</div>

</body>
</html>