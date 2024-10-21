<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Arrivals - Bharat Hardware Stores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff7e6;
            color: #333;
        }
        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            margin: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .btn-buy {
            background-color: #ff5722;
            color: #fff;
            width: 100%;
            margin-top: 1rem;
            border-radius: 5px;
            padding: 0.5rem;
        }
    </style>
    <script>
        function addToCart(name, description, price, image) {
            const quantity = 1; // Default quantity to add
            const xhr = new XMLHttpRequest();
            xhr.open("GET", `add_to_cart.php?name=${encodeURIComponent(name)}&description=${encodeURIComponent(description)}&price=${price}&image=${encodeURIComponent(image)}&quantity=${quantity}`, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.status === 'success') {
                        // Show success notification
                        alert(name + ' has been added to your cart!');
                    } else {
                        alert('Error adding to cart. Please try again.');
                    }
                } else {
                    alert('Error communicating with the server.');
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff8800;">
        <a class="navbar-brand" href="#">Bharat Hardware Stores</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">View Cart</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section class="container">
    <h2 class="text-center">New Arrivals</h2>
    <div class="row" id="product-container">
        <?php
        // Database connection
        $servername = "localhost";
        $username = "root"; // Use your MySQL username
        $password = ""; // Use your MySQL password
        $dbname = "hardware_store";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from the 'arrivals' table
        $sql = "SELECT * FROM arrivals";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data for each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4'>";
                echo "<div class='product-card p-3'>";
                echo "<h5>" . htmlspecialchars($row['name']) . "</h5>";
                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' class='img-fluid'>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "<p><strong>Price:</strong> ₹" . htmlspecialchars($row['price']) . "</p>";
                // Call the JavaScript function with product details
                echo "<button class='btn btn-buy' onclick='addToCart(\"" . htmlspecialchars($row['name']) . "\", \"" . htmlspecialchars($row['description']) . "\", " . htmlspecialchars($row['price']) . ", \"" . htmlspecialchars($row['image']) . "\")'>Add to Cart</button>";
                echo "</div>"; // Close product-card div
                echo "</div>"; // Close column div
            }
        } else {
            echo "<p>No products found.</p>";
        }

        $conn->close();
        ?>
    </div>
</section>

</body>
</html>
