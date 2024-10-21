<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diwali Offers - Bharat Hardware Stores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff7e6;
            color: #333;
        }
        .product-card {
    background-color: #ffffff; /* Set background color to white */
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
    
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff8800;">
        <a class="navbar-brand" href="#">Bharat Hardware Stores</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">View Cart</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="diwali_sale.php">Diwali Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopnow.php">Products</a>
                    </li>
            </ul>
        </div>
    </nav>
</header>

<section class="container">
    <h2 class="text-center">Diwali Special Offers</h2>
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

        // Fetch data from the database
        $sql = "SELECT * FROM diwali";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data for each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4'>";
                echo "<div class='product-card p-3'>";
                echo "<h5>" . htmlspecialchars($row['name']) . "</h5>"; // Use htmlspecialchars for security
                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' class='img-fluid'>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "<p><strong>Original Price:</strong> ₹" . htmlspecialchars($row['originalPrice']) . "</p>";
                echo "<p><strong>Discounted Price:</strong> ₹" . htmlspecialchars($row['discountedPrice']) . "</p>";
                // Call the JavaScript function with product details
                echo "<button class='btn btn-buy' onclick='addToCart(\"" . addslashes($row['id']) . "\", \"" . addslashes($row['name']) . "\", \"" . addslashes($row['image']) . "\", " . $row['discountedPrice'] . ")'>Add to Cart</button>";
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

<script>
    function addToCart(id, name, image, price) {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const existingItem = cart.find(item => item.id === id);

        if (existingItem) {
            existingItem.quantity += 1; // Increase quantity if already in cart
        } else {
            cart.push({ id, name, image, price, quantity: 1 }); // Add new item to cart
        }

        localStorage.setItem('cart', JSON.stringify(cart)); // Save cart to local storage
        alert(name + ' has been added to your cart!'); // Notify user
    }
</script>

</body>
</html>
