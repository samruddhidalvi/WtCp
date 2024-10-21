<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login_signup.php");
    exit();
}

// Database connection (optional if you want to display more user details)
$servername = "localhost";
$username = "root";
$password = "";
$database = "hardware_store";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details (optional if more user info needs to be shown)
$email = $_SESSION['email']; // Assuming email is saved in session after login
$query = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($query);
$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding-top: 50px;
        }

        .profile-container {
            max-width: 600px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .profile-container h2 {
            color: #4A4E69;
        }

        .profile-container p {
            font-size: 1.2rem;
            color: #7F8C8D;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: #F67280;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
        }

        .logout-btn:hover {
            background-color: #E74C3C;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Email: <?php echo $user['email']; ?></p> <!-- Optional: More user details can be shown here -->
    
    <a href="logout.php" class="logout-btn">Logout</a>
</div>

</body>
</html>
