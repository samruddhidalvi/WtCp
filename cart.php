<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8; /* Lighter background for a fresh look */
            color: #333;
        }
        .navbar {
            background-color: #343a40; /* Dark Gray */
        }
        .navbar a {
            color: white !important;
        }
        .cart-container {
            max-width: 900px;
            margin: auto;
            padding: 30px;
            background-color: #fff; /* White background for the cart */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }
        h1 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #343a40; /* Darker text for headings */
        }
        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f8f9fa; /* Light gray background for cart items */
            border: 1px solid #dee2e6; /* Light border */
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            transition: box-shadow 0.3s, transform 0.2s;
        }
        .cart-item:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }
        .cart-item img {
            width: 80px; /* Image size */
            height: 80px; /* Image size */
            border-radius: 5px; /* Rounded corners */
            margin-right: 15px;
        }
        .quantity-stepper {
            display: flex;
            align-items: center;
        }
        .quantity-input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 5px;
            transition: border-color 0.3s;
        }
        .quantity-input:focus {
            border-color: #007bff; /* Bootstrap primary color */
            outline: none;
        }
        .total {
            font-weight: bold;
            font-size: 1.5em;
            margin-top: 20px;
        }
        .btn-danger {
            background-color: #dc3545; /* Bootstrap danger color */
            border: none;
        }
        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
        }
        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Bharat Hardware Stores</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="shopnow.php">Shop Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="diwali_sale.php">Diwali Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopnow.php">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="cart-container">
        <h1>Your Cart</h1>
        <div id="cartContainer">
            <!-- Cart items will be inserted here dynamically -->
        </div>
        <div id="cartTotal" class="total">Total: ₹0</div>
        <button class="btn btn-primary mt-3" onclick="checkout()">Place Order</button>
    </div>

    <script>
        function loadCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartContainer = document.getElementById('cartContainer');
            cartContainer.innerHTML = ''; // Clear previous content
            let total = 0;

            cart.forEach((item, index) => {
                const itemTotal = item.price * item.quantity; // Calculate total for the item
                total += itemTotal;

                cartContainer.innerHTML += `
                    <div class="cart-item">
                        <img src="images/${item.image}" alt="${item.name}"> <!-- Display image -->
                        <div>
                            <strong>${item.name}</strong><br>
                            <span>₹${item.price} x 
                                <div class="quantity-stepper">
                                    <button class="btn btn-outline-secondary" onclick="updateQuantity(${index}, 'decrement')">-</button>
                                    <input type="number" value="${item.quantity}" min="1" class="quantity-input" onchange="updateQuantity(${index}, this.value)">
                                    <button class="btn btn-outline-secondary" onclick="updateQuantity(${index}, 'increment')">+</button>
                                </div>
                            </span>
                        </div>
                        <div>
                            <strong>₹${itemTotal}</strong>
                            <button class="btn btn-danger btn-sm" onclick="removeItem(${index})">Remove</button>
                        </div>
                    </div>
                `;
            });

            // Update total
            document.getElementById('cartTotal').innerText = 'Total: ₹' + total;
        }

        function updateQuantity(index, action) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (action === 'increment') {
                cart[index].quantity++; // Increment quantity
            } else if (action === 'decrement' && cart[index].quantity > 1) {
                cart[index].quantity--; // Decrement quantity
            } else if (typeof action === 'number' && action > 0) {
                cart[index].quantity = action; // Set to specific quantity
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart(); // Reload the cart to reflect changes
        }

        function removeItem(index) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1); // Remove item at index
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart(); // Reload the cart to reflect changes
        }

        function checkout() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            if (cart.length === 0) {
                alert('Your cart is empty.'); // Alert if the cart is empty
                return;
            }

            // Redirect to product_detail.php of the first item in the cart
            const firstItem = cart[0]; // Get the first item in the cart
            window.location.href = `product_detail.php?id=${firstItem.id}`; // Redirect to product detail page
        }

        // Load cart on page load
        window.onload = loadCart;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
