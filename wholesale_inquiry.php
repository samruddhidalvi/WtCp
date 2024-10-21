<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "localhost";
$username = "root"; // Use your database username
$password = ""; // Use your database password
$dbname = "hardware_store"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO wholesale_inquiries (name, company, email, phone, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $company, $email, $phone, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Thank you for your inquiry! We will contact you soon.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wholesale Inquiry</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2e9e4;
        }
        .inquiry-container {
            margin-top: 50px;
        }
        .inquiry-form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-submit {
            background-color: #F67280;
            color: white;
        }
        .btn-submit:hover {
            background-color: #e7516c;
        }
    </style>
</head>
<body>

<div class="container inquiry-container">
    <h2 class="text-center mb-4">Wholesale Inquiry Form</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="inquiry-form">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Collect form data
                    $name = $_POST['name'];
                    $company = $_POST['company'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];

                    // Validate form data
                    if (!empty($name) && !empty($company) && !empty($email) && !empty($phone)) {
                        // You can store the data in a database or send an email
                        // For demonstration, let's show the confirmation
                        echo "<div class='alert alert-success'>Thank you for your wholesale inquiry, $name! Our team will contact you soon.</div>";

                        // You can add code here to insert data into the database or send an email notification
                    } else {
                        echo "<div class='alert alert-danger'>Please fill out all required fields.</div>";
                    }
                }
                ?>
                <form id="wholesaleInquiryForm" action="wholesale_inquiry.php" method="POST">

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company/Business Name</label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Enter your company name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Additional Requirements or Notes</label>
                        <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter additional requirements or notes"></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
