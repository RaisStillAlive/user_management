<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
            margin: 0;
        }

        .dashboard-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        .dashboard-container h1 {
            color: #333333;
        }

        .dashboard-container p {
            color: #666666;
            font-size: 16px;
        }

        .dashboard-container .role {
            font-weight: bold;
            color: #5cb85c;
        }

        .logout-button {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #d9534f;
            color: #ffffff;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .logout-button:hover {
            background-color: #c9302c;
        }

    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?> (Admin)!</h1>
        <p>This is Admin's Dashboard.</p>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>
</html>
