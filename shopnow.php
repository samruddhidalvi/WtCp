<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Now - Bharat Hardware Stores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        .navbar {
    background-color: #343a40; /* Dark Gray */
}

.navbar a {
    color: white !important; /* White text */
}

.navbar-brand {
    text-align: center; /* Center the brand name */
    width: 100%; /* Full width to allow centering */
}

        .navbar .nav-link:hover {
            color: #ffc107; /* Lighter Yellow */
        }

        /* Sidebar styling */
        .sidebar {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            position: fixed; /* Make sidebar fixed */
            left: 0;
            top: 0;
            height: 100%;
            width: 250px; /* Set a fixed width for the sidebar */
            z-index: 1000; /* Ensure sidebar is above other content */
        }

        .sidebar h4 {
            color: #2F4858;
        }

        .sidebar a {
            color: #2F4858;
            font-weight: bold;
            cursor: pointer;
            display: block;
            padding: 5px 0;
            transition: color 0.2s;
        }

        .sidebar a:hover {
            color: #F8B400;
        }

        /* Hide sidebar initially */
        .sidebar.collapsed {
            transform: translateX(-100%);
        }

        /* Product card styling */
        .product-card {
            background-color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            margin-bottom: 30px; /* Adjusted bottom margin */
            margin-right: 15px; /* Right margin for spacing */
            display: flex;
            flex-direction: column;
            height: 350px; /* Fixed height */
            width: 250px; /* Fixed width */
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card img {
            max-height: 150px;
            object-fit: contain;
            margin-bottom: 10px;
            align-self: center; /* Center image */
        }

        .product-card h5 {
            font-size: 18px;
            font-weight: bold;
            color: #2F4858;
        }

        .product-card p {
            color: #777;
            flex-grow: 1; /* Push button to the bottom */
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Add to Cart button */
        .btn-buy {
            background-color: #008080; /* Teal */
            color: #fff;
            border-radius: 5px;
            padding: 0.5rem;
            margin-top: auto; /* Push button to the bottom */
            width: 100%; /* Full width for button */
        }

        .btn-buy:hover {
            background-color: #005f5f; /* Darker Teal */
            color: #fff;
        }

        /* Row layout with three cards per row */
        .product-card {
    background-color: #ffffff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    margin-bottom: 30px; /* Adjusted bottom margin */
    margin-right: 30px; /* Right margin for spacing */
    display: flex;
    flex-direction: column;
    height: 400px; /* Adjusted height */
    width: 250px; /* Fixed width */
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-card img {
    max-height: 150px;
    object-fit: contain;
    margin-bottom: 10px;
    align-self: center; /* Center image */
}

.product-card h5 {
    font-size: 18px;
    font-weight: bold;
    color: #2F4858;
    margin: 20px 0; /* Added margin for spacing */
}

.product-card p {
    color: #777;
    flex-grow: 1; /* Push button to the bottom */
    margin: 0; /* Reset margin */
}

/* Add to Cart button */
.btn-buy {
    background-color: #008080; /* Teal */
    color: #fff;
    border-radius: 5px;
    padding: 10px; /* Increased padding for button */
    margin-top: auto; /* Push button to the bottom */
    width: 100%; /* Full width for button */
}


        /* Toggle button */
        .toggle-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1000;
            background-color: #F8B400; /* Sun Yellow */
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .toggle-btn:hover {
            background-color: #ffc107; /* Lighter Yellow */
        }

        /* Sorting options styling */
         .sort-options {
            margin-bottom: 20px;
            position: absolute; /* Make position absolute */
            right: 30px; /* Align to the right */
            top: 90px; /* Align to the top */
            z-index: 1000; /* Ensure it's on top */
        }
        .text-center {
    text-align: center;
    color: #2F4858; /* Title color */
    margin-bottom: 20px; /* Space below the title */
}
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#">Bharat Hardware Stores</a>
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
        </div>
    </nav>
</header>


<!-- Sidebar and Product Section -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar p-3" style="background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);">
                <h4>Categories</h4>
                <ul class="list-unstyled">
                    <li><a href="#" onclick="filterProducts('all')">All Products</a></li>
                    <li><a href="#" onclick="filterProducts('tools')">Tools</a></li>
                    <li><a href="#" onclick="filterProducts('plumbing')">Plumbing</a></li>
                    <li><a href="#" onclick="filterProducts('hardware')">Hardware</a></li>
                    <li><a href="#" onclick="filterProducts('electrical')">Electrical</a></li>
                    <li><a href="#" onclick="filterProducts('New Arrivals')">New Arrivals</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <h2 class="text-center mb-4">Shop Now</h2> <!-- Centered title -->
            <div class="row product-container" id="product-container">
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

        // Fetch data from the products table
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-card p-3' data-category='" . htmlspecialchars($row['category']) . "' data-price='" . htmlspecialchars($row['price']) . "' data-name='" . htmlspecialchars($row['name']) . "'>";
                echo "<h5>" . htmlspecialchars($row['name']) . "</h5>"; // Product Name
                echo "<img src='images/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "' class='img-fluid'>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>"; // Description
                echo "<p><strong>Price:</strong> ₹" . htmlspecialchars($row['price']) . "</p>"; // Price
                echo "<button class='btn btn-buy' onclick='addToCart(\"" . addslashes($row['id']) . "\", \"" . addslashes($row['name']) . "\", \"" . addslashes($row['image']) . "\", " . $row['price'] . ")'>Add to Cart</button>";
                echo "</div>"; // Close product-card div
            }
        } else {
            echo "<p>No products found.</p>";
        }
        $conn->close();
        ?>
        </div>
        </div>
    </div>
</div>

<!-- Sorting and Filtering Script -->
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

    function sortProducts() {
        const sortOption = document.getElementById('sortOptions').value;
        const productContainer = document.getElementById('product-container');
        const products = Array.from(productContainer.getElementsByClassName('product-card'));

        if (sortOption === 'priceAsc') {
            products.sort((a, b) => parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price')));
        } else if (sortOption === 'priceDesc') {
            products.sort((a, b) => parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price')));
        } else if (sortOption === 'nameAsc') {
            products.sort((a, b) => a.getAttribute('data-name').localeCompare(b.getAttribute('data-name')));
        } else if (sortOption === 'nameDesc') {
            products.sort((a, b) => b.getAttribute('data-name').localeCompare(a.getAttribute('data-name')));
        }

        // Clear the container and append sorted products
        productContainer.innerHTML = '';
        products.forEach(product => productContainer.appendChild(product));
    }

    function filterProducts(category) {
        const productContainer = document.getElementById('product-container');
        const products = Array.from(productContainer.getElementsByClassName('product-card'));

        products.forEach(product => {
            if (category === 'all') {
                product.style.display = 'block'; // Show all products
            } else if (product.getAttribute('data-category') === category) {
                product.style.display = 'block'; // Show matching category
            } else {
                product.style.display = 'none'; // Hide non-matching products
            }
        });
    }

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('collapsed'); // Toggle the collapsed class
    }
</script>

</body>
</html>
