<?php
// Database connection
$host = 'localhost';
$dbname = 'hardware_store'; // Existing database
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into contact_messages table
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
        $successMessage = "Thank you, $name! Your message has been sent successfully.";
    } catch (PDOException $e) {
        $errorMessage = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff; /* White */
            color: #2C3E50; /* Dark Slate Gray */
        }

        .container {
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            transition: transform 0.3s;
        }

        .container:hover {
            transform: scale(1.02); /* Slight zoom effect on hover */
        }

        h1,
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #E7516C; /* Vibrant Pink */
        }

        .form-control:focus {
            border-color: #F29D9B; /* Lighter Pink */
            box-shadow: 0 0 5px rgba(242, 157, 155, 0.5);
        }

        .btn-custom {
            background-color: #E7516C; /* Vibrant Pink */
            border: none;
            width: 100%;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-custom:hover {
            background-color: #D74256; /* Darker Pink */
            transform: translateY(-2px);
        }

        .alert {
            margin-top: 20px;
        }

        .social-icons {
            text-align: center;
            margin-top: 20px;
        }

        .social-icons a {
            margin: 0 10px;
            transition: transform 0.3s;
        }

        .social-icons a:hover {
            transform: scale(1.1); /* Slightly enlarge social icons on hover */
        }

        .contact-info a {
            color: #E7516C; /* Vibrant Pink */
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-info a:hover {
            color: #D74256; /* Darker Pink */
        }

        .view-map-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #F29D9B; /* Lighter Pink */
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s, transform 0.3s;
        }

        .view-map-btn:hover {
            background-color: #D74256; /* Darker Pink */
            transform: scale(1.05); /* Slightly enlarge button on hover */
        }

        .navbar-nav .nav-link:hover {
            color: #F67280 !important; /* Change text color on hover */
        }

        .btn-primary:hover {
            background-color: #F35D6F; /* Darker red on hover */
            transform: scale(1.05); /* Slight button scaling on hover */
        }

        .btn-outline-primary:hover {
            background-color: #F67280; /* Fill with color on hover */
            color: #FFF !important; /* Change text color to white */
            transform: scale(1.05); /* Slight button scaling on hover */
        }
        .navbar {
    padding: 0.5rem 0.5rem; /* Decrease padding for a slimmer look */
}

.navbar-brand {
    font-size: 1.2rem; /* Adjust the font size if necessary */
}

.navbar-nav .nav-link {
    padding: 0.5rem 1rem; /* Decrease padding for nav links */
}

.btn {
    padding: 0.25rem 0.5rem; /* Adjust button padding */
}

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #000000;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: #ffffff; font-weight: bold;">Bharat Hardware Stores</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html" style="color: #ffffff; transition: color 0.3s;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html" style="color: #ffffff; transition: color 0.3s;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopnow.php" style="color: #ffffff; transition: color 0.3s;">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" style="color: #ffffff; transition: color 0.3s;">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light mr-2" href="shopnow.php" style="
                            border-color: #ffffff; 
                            color: #ffffff; 
                            transition: background-color 0.3s, color 0.3s, transform 0.3s;">
                            Shop Now
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light mr-2" href="cart.php" style="
                            border-color: #ffffff; 
                            color: #ffffff; 
                            transition: background-color 0.3s, color 0.3s, transform 0.3s;">
                            Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="login.php" style="
                            border-color: #ffffff; 
                            color: #ffffff; 
                            transition: background-color 0.3s, color 0.3s, transform 0.3s;">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Contact Us</h1>

        <!-- Display success or error message -->
        <?php if (isset($successMessage)): ?>
            <div class="alert alert-success"><?= $successMessage ?></div>
        <?php elseif (isset($errorMessage)): ?>
            <div class="alert alert-danger"><?= $errorMessage ?></div>
        <?php endif; ?>

        <form method="POST" action="contact.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-custom">Send Message</button>
        </form>

        <div class="contact-info mt-4 text-center">
            <h2>Contact Information</h2>
            <p><strong>Phone:</strong> +91 12345 67890</p>
            <p><strong>Email:</strong> bharathardware@gmail.com</p>
            <p>
                <strong>Address:</strong>
                Shop No 2, Mutha Market, Narayangaon, Narayangaon - 410504
            </p>
            <a href="https://maps.app.goo.gl/cqMAhqwQA1QrnE586" target="_blank" class="view-map-btn">View on Map</a>
        </div>

        <div class="social-icons">
            <a href="https://facebook.com" target="_blank">
                <img src="https://img.icons8.com/ios-filled/30/007bff/facebook.png" alt="Facebook">
            </a>
            <a href="https://twitter.com" target="_blank">
                <img src="https://img.icons8.com/ios-filled/30/007bff/twitter.png" alt="Twitter">
            </a>
            <a href="https://instagram.com" target="_blank">
                <img src="https://img.icons8.com/ios-filled/30/007bff/instagram-new.png" alt="Instagram">
            </a>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
