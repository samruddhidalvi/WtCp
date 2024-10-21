<?php
// Fetch product details from the URL query parameters
$productName = isset($_GET['name']) ? $_GET['name'] : 'Unknown Product';
$productPrice = isset($_GET['price']) ? $_GET['price'] : 'Unknown Price';
$productImg = isset($_GET['img']) ? $_GET['img'] : 'default.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F2E9E4; /* Light Beige */
            color: #4A4E69; /* Dark Lavender */
        }
        .product-details {
            margin-top: 50px;
        }
        .product-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .quantity-input {
            width: 80px;
            margin-right: 20px;
        }
        .address-input, .email-input, .phone-input {
            width: 100%;
            margin-bottom: 15px;
        }
        .invalid-feedback {
            display: none;
            color: red;
            font-size: 0.9em;
        }
        .spinner {
            display: none;
        }

        /* Cash on Delivery Section */
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

        /* Warranty Section */
        .warranty-section {
            background-color: #F2E9E4; /* Light Beige */
            color: #4A4E69; /* Dark Lavender */
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
            border: 2px solid #4A4E69; /* Dark Lavender border */
        }
        .warranty-section h5 {
            color: #F67280; /* Soft Coral */
        }
        .warranty-section p {
            margin-bottom: 10px;
        }

        /* Button Style */
        .btn-primary {
            background-color: #F67280; /* Soft Coral */
            border-color: #F67280;
        }
        .btn-primary:hover {
            background-color: #4A4E69; /* Dark Lavender */
            border-color: #4A4E69;
        }
        /* Styling for the price to add more interactivity */
.total-price {
    font-weight: bold;
    color: #4A4E69; /* Default color */
    transition: color 0.3s ease, transform 0.3s ease;
}

    </style>
</head>
<body>
    <div class="container product-details">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo htmlspecialchars($productImg); ?>" alt="<?php echo htmlspecialchars($productName); ?>" class="product-image">
            </div>
            <div class="col-md-6">
                <h2><?php echo htmlspecialchars($productName); ?></h2>
                <p><strong>Price:</strong> ₹<?php echo htmlspecialchars($productPrice); ?> per unit</p>
                
                <!-- Quantity Input -->
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" id="quantity" class="form-control quantity-input" value="1" min="1" onchange="calculateTotal()">
                </div>
              
                <!-- Address Input -->
                <div class="mb-3">
                    <label for="address" class="form-label">Delivery Address:</label>
                    <textarea id="address" class="form-control address-input" rows="3" placeholder="Enter your delivery address"></textarea>
                    <div class="invalid-feedback" id="addressError">Address is required.</div>
                </div>

                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input type="email" id="email" class="form-control email-input" placeholder="Enter your email">
                    <div class="invalid-feedback" id="emailError">Please enter a valid email.</div>
                </div>

                <!-- Phone Input -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="tel" id="phone" class="form-control phone-input" placeholder="Enter your phone number">
                    <div class="invalid-feedback" id="phoneError">Phone number is required.</div>
                </div>

                  
                <!-- Live Total Price -->
                <p><strong>Total Price:</strong> ₹<span id="totalPrice"><?php echo htmlspecialchars($productPrice); ?></span></p>


                <!-- Cash on Delivery Section -->
                <div class="cod-section">
                    <div class="cod-header">Payment Method</div>
                    <div class="cod-info">
                        <p><strong>Cash on Delivery:</strong> Pay in cash when your order is delivered at your doorstep. Please ensure that you have the exact amount as our delivery personnel might not carry change.</p>
                        <p><strong>Delivery Time:</strong> 2-4 business days.</p>
                    </div>
                    <p class="cod-note">Note: Kindly double-check your delivery details and keep your contact number active for communication.</p>
                </div>

                <!-- Warranty & Return Policy Section -->
                <div class="warranty-section">
                    <h5>Warranty & Return Policy</h5>
                    <p>This product comes with a 1-year warranty. Return within 7 days of delivery for a full refund.</p>
                </div>

                <!-- Purchase Button with Loading Spinner -->
                <button class="btn btn-primary mt-3" id="purchaseButton" onclick="purchaseProduct()">Proceed to Purchase</button>
                <div class="spinner-border text-primary mt-3 spinner" id="loadingSpinner" role="status">
                    <span class="sr-only">Processing...</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        let productPrice = <?php echo htmlspecialchars($productPrice); ?>;

        // Function to calculate total price based on quantity
        function calculateTotal() {
            const quantity = document.getElementById('quantity').value;
            const totalPrice = productPrice * quantity;
            document.getElementById('totalPrice').textContent = totalPrice;
        }

        // Function to validate form fields
        function validateForm() {
            const address = document.getElementById('address').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();

            let isValid = true;

            if (!address) {
                document.getElementById('addressError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('addressError').style.display = 'none';
            }

            const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
            if (!email || !emailPattern.test(email)) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('emailError').style.display = 'none';
            }

            if (!phone) {
                document.getElementById('phoneError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('phoneError').style.display = 'none';
            }

            return isValid;
        }

        // Function to simulate purchase process
        function purchaseProduct() {
            if (validateForm()) {
                // Show loading spinner
                document.getElementById('purchaseButton').style.display = 'none';
                document.getElementById('loadingSpinner').style.display = 'block';

                // Simulate a delay for processing
                setTimeout(() => {
                    const quantity = document.getElementById('quantity').value;
                    const address = document.getElementById('address').value;
                    alert(`Thank you for your purchase! Your order of ${quantity} units will be delivered to ${address}.`);
                    document.getElementById('loadingSpinner').style.display = 'none';
                    document.getElementById('purchaseButton').style.display = 'block';
                }, 2000);
            } else {
                alert('Please fill in all required fields.');
            }
        }
    </script>
</body>
</html>
