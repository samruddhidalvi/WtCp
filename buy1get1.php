<!-- orders -->
<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hardware_store";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO orders (product_name, quantity, price, address, contact, delivery_instructions) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sidsis", $product_name, $quantity, $price, $address, $contact, $delivery_instructions);

    // Capture form data
    $product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;
    $price = isset($_POST['price']) ? floatval($_POST['price']) : 0.0;
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
    $delivery_instructions = isset($_POST['delivery_instructions']) ? $_POST['delivery_instructions'] : '';

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Order placed successfully!');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - Bharat Hardware Stores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EDEAE5; /* Light Warm Gray */
            color: #2E4057; /* Soft Navy */
        }
        .product-details {
            margin-top: 2rem;
        }
        .product-img {
            max-height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
        .btn-purchase {
            background-color: #84A59D; /* Muted Teal */
            color: #fff;
            margin-top: 1rem;
            transition: background-color 0.3s ease;
            border-radius: 5px;
        }
        .btn-purchase:hover {
            background-color: #52796F; /* Darker Teal */
        }
        .total-amount {
            font-weight: bold;
    color: #4A4E69; /* Default color */
    transition: color 0.3s ease, transform 0.3s ease;
        }
        header {
            margin-bottom: 2rem;
        }
        .cod-section {
            background-color: #FAF3DD; /* Light Cream */
            border-radius: 8px;
            padding: 1rem;
            margin-top: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .cod-header {
            font-size: 1.25rem;
            font-weight: bold;
            color: #2E4057; /* Soft Navy */
        }
        .cod-info {
            margin-top: 0.5rem;
            color: #4A4E69; /* Warm Lavender */
        }
        .cod-info strong {
            color: #D17A22; /* Warm Orange */
        }
        .cod-note {
            font-size: 0.9rem;
            color: #8D99AE; /* Muted Gray */
            margin-top: 0.8rem;
        }
        footer {
            background-color: #52796F; /* Darker Teal */
            color: white;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F2E9E4;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: #4A4E69;">Bharat Hardware Stores</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html" style="color: #4A4E69;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#offers" style="color: #4A4E69;">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" style="color: #4A4E69;">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html" style="color: #4A4E69;">About Us</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html"style="color: #4A4E69;">
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html" style="color: #4A4E69;">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="products.html" style="background-color: #F67280; border: none;">Shop Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="container product-details">
    <div class="row">
        <div class="col-md-6">
            <img id="product-image" class="img-fluid product-img" alt="Product Image">
        </div>
        <div class="col-md-6">
            <h2 id="product-name"></h2>
            <p id="product-description"></p>
            <p><strong>Price: </strong><span id="product-original-price"></span></p>
            
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" class="form-control" value="1" min="1" onchange="calculateTotal()">
            </div>
            <div class="form-group">
                <label for="address">Delivery Address:</label>
                <textarea id="address" class="form-control" rows="3" placeholder="Enter your delivery address"></textarea>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" id="contact" class="form-control" placeholder="Enter your contact number">
                </div>
                <div class="form-group">
                 <label for="delivery-instructions">Delivery Instructions:</label>
    <textarea id="delivery-instructions" class="form-control" rows="3" placeholder="E.g., Leave package at the door or Call before delivery"></textarea>
</div>
   <p class="total-amount" id="total-amount">Total Amount: ₹0</p>

            <div class="cod-section">
                <div class="cod-header">Payment Method</div>
                <div class="cod-info">
                    <p><strong>Cash on Delivery:</strong> Pay in cash when your order is delivered at your doorstep. Please ensure that you have the exact amount as our delivery personnel might not carry change.</p>
                    <p><strong>Delivery Time:</strong> 2-4 business days.</p>
                </div>
                <p class="cod-note">Note: Kindly double-check your delivery details and keep your contact number active for communication.</p>
            </div>

            <button class="btn btn-purchase" onclick="proceedToPurchase()">Proceed to Purchase</button>

            <div class="warranty-section">
    <h5>Warranty & Return Policy</h5>
    <p>This product comes with a 1-year warranty. Return within 7 days of delivery for a full refund.</p>
</div>
        </div>
    </div>
</section>

<footer>
    &copy; 2024 Bharat Hardware Stores - All Rights Reserved
</footer>

<script>
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const productName = getQueryParam('name') || 'Unknown Product';
        const productDescription = getQueryParam('description') || 'No description available';
        const originalPrice = parseFloat((getQueryParam('originalPrice') || '0').replace('₹', '').replace(',', ''));

        // Update the page content with product details
        document.getElementById('product-name').textContent = productName;
        document.getElementById('product-description').textContent = productDescription;
        document.getElementById('product-original-price').textContent = `₹${originalPrice.toFixed(2)}`;

        // Set the image source
        const imageUrl = getQueryParam('image');
        if (imageUrl) {
            document.getElementById('product-image').src = imageUrl;
        } else {
            document.getElementById('product-image').src = 'default-product.jpg'; // Fallback image
        }

        // Set the initial total amount
        calculateTotal();
    });

    function calculateTotal() {
        const quantity = document.getElementById('quantity').value;
        const originalPrice = parseFloat((getQueryParam('originalPrice') || '0').replace('₹', '').replace(',', ''));
        const totalAmount = originalPrice * quantity;

        // Animation for total amount
        const totalAmountElem = document.getElementById('total-amount');
        totalAmountElem.style.transition = 'color 0.3s ease, transform 0.3s ease'; // Add smooth animation
        totalAmountElem.style.color = '#F67280';  // Color change to Soft Coral
        totalAmountElem.style.transform = 'scale(1.1)'; // Scale up when updating

        // Set the updated total amount after animation
        setTimeout(() => {
            totalAmountElem.textContent = `Total Amount: ₹${totalAmount.toFixed(2)}`;
            totalAmountElem.style.color = '#D17A22';  // Warm Orange (reset color)
            totalAmountElem.style.transform = 'scale(1)'; // Scale back to normal
        }, 300);
    }

    function proceedToPurchase() {
        const address = document.getElementById('address').value;
        const contact = document.getElementById('contact').value;
        const deliveryInstructions = document.getElementById('delivery-instructions').value;

        if (!address || !contact) {
            alert('Please fill in all the fields before proceeding.');
        } else {
            alert('Thank you! Your order has been placed.');
        }
    }
</script>