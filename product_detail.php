<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Bharat Hardware Stores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            margin: 30px auto;
            max-width: 800px;
        }
        .total-amount {
            font-size: 1.5rem;
            font-weight: bold;
            color: #d32f2f;
            margin-top: 20px;
        }
        .btn-purchase {
            background-color: #ff5722;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
        .btn-purchase:hover {
            background-color: #e64a19;
        }
        .cod-section {
            margin-top: 20px;
        }
        .cod-header {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .cod-info {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container form-container">
    <h2>Checkout</h2>

    <!-- Display Cart Items -->
    <div id="cart-items"></div>
    
    <!-- Display Total Amount -->
    <p class="total-amount" id="total-amount">Total Amount: ₹0</p>
    
    <!-- Form for collecting delivery details -->
    <form action="process_order.php" method="POST">
        <div class="form-group">
            <label for="address">Delivery Address:</label>
            <textarea id="address" name="address" class="form-control" rows="3" placeholder="Enter your delivery address" required></textarea>
        </div>

        <div class="form-group">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" class="form-control" placeholder="Enter your contact number" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>

        <!-- Hidden fields to store cart and total price -->
        <input type="hidden" name="cartData" id="cartData">
        <input type="hidden" name="totalPrice" id="totalPrice">

        <div class="cod-section">
            <div class="cod-header">Payment Method</div>
            <div class="cod-info">
                <p><strong>Cash on Delivery:</strong> Pay in cash when your order is delivered at your doorstep. Please ensure that you have the exact amount as our delivery personnel might not carry change.</p>
               
           </div>
    <p class="cod-note">Note: Kindly double-check your delivery details and keep your contact number active for communication.</p>
</div>

<!-- No Cancellation or Refund Policy -->
<div class="no-refund-policy mt-4 p-3" style="background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h5 style="color: #d9534f;">Cancellation and Refund Policy</h5>
    <p style="color: #6c757d;">
        Please note that all sales are final. Once an order has been placed and confirmed, we are unable to offer cancellations, changes, or refunds.
        We encourage customers to review their order carefully before proceeding to checkout.
    </p>
    <p style="color: #6c757d;">
        In case of any issues such as damaged or defective products, kindly contact our customer service team for assistance.
    </p>
</div>

<button type="submit" class="btn btn-purchase mt-4">Proceed to Purchase</button>

<!-- Styles for interactive design -->
<style>
    .no-refund-policy:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    }

    .btn-purchase:hover {
        background-color: #0056b3;
        transform: scale(1.05);
        transition: all 0.3s;
    }
</style>


<script>
    // Load the cart from localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];  // Fetch the cart from localStorage
    const cartItemsDiv = document.getElementById('cart-items');
    let totalPrice = 0;
    if (cart.length === 0) {
        cartItemsDiv.innerHTML = "<p>Your cart is empty!</p>";
    } else {
        // Display cart items
        cart.forEach(item => {
            const price = parseFloat(item.price);  // Convert price to a number
            const quantity = parseInt(item.quantity);  // Convert quantity to a number
            
            if (!isNaN(price) && !isNaN(quantity)) {  // Check if price and quantity are valid numbers
                const itemTotal = price * quantity;  // Calculate total for the item
                totalPrice += itemTotal;  // Accumulate total price for all items
                
                // Create HTML for each cart item
                const cartItemDiv = document.createElement('div');
                cartItemDiv.innerHTML = `
                    <div>
                        <h5>${item.name} (x${quantity})</h5>
                        <p><strong>Price:</strong> ₹${price.toFixed(2)}</p>
                        <p><strong>Total for item:</strong> ₹${itemTotal.toFixed(2)}</p>
                    </div>
                    <hr>
                `;
                cartItemsDiv.appendChild(cartItemDiv);
            }
        });

        // Display total price
        document.getElementById('total-amount').textContent = `Total Amount: ₹${totalPrice.toFixed(2)}`;
        document.getElementById('totalPrice').value = totalPrice.toFixed(2); // Set total price in the hidden field
        document.getElementById('cartData').value = JSON.stringify(cart);  // Set cart data in hidden field
    }
    window.location.href = `subdirectory/product_detail.php?id=${firstItem.id}`;

</script>

</body>
</html>
