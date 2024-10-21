<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharat Hardware Stores - Diwali Offers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Global Fresh Theme */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fbfbfd; /* Light Cool Gray */
            color: #000000; /* Dark Gray for text */
        }
    
    /* Parallax effect */
    .hero-section {
        background-attachment: fixed;
        background-size: cover;
    }

    /* Text animations */
    .animated {
        opacity: 0;
        animation-duration: 1s;
        animation-fill-mode: forwards;
    }

    .fadeInDown {
        animation-name: fadeInDown;
    }

    .fadeInUp {
        animation-name: fadeInUp;
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Button hover effect */
    .btn-primary:hover {
        background-color: #f2e7e9; /* Slightly darker coral */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        transform: translateY(-3px);
    }

    /* Overlay hover effect */
    .hero-section:hover .overlay {
        background: linear-gradient(180deg, rgba(5, 9, 47, 0.9), rgba(78, 66, 66, 0.5));
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .hero-section {
            height: 60vh;
        }

        .container h1 {
            font-size: 2.5rem;
        }

        .btn-primary {
            font-size: 1rem;
            padding: 10px 30px;
        }
    }

        /* Interactive Effects */
        .offer-card:before,
        .service-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 10px;
        }
    
        .offer-card:hover:before,
        .service-card:hover:before {
            opacity: 1;
        }
    
        /* Media Queries */
        @media (max-width: 768px) {
            .brands-gallery {
                flex-direction: column;
                align-items: center;
            }
    
            .brand-logo {
                height: 60px;
            }
        }
    </style>
    
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg" style="background-color: #000000;">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: #ffffff; font-weight: bold;">Bharat Hardware Stores</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color: #ffffff; transition: color 0.3s;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#offers" style="color: #ffffff; transition: color 0.3s;">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services" style="color: #ffffff; transition: color 0.3s;">Our Services</a>
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

<!-- Styles for interaction -->
<style>
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
</style>

    <!-- Hero Section -->
    <header>
        <section class="hero-section" style="
            background: linear-gradient(135deg, rgba(255, 222, 233, 0.7) 0%, rgba(181, 255, 252, 0.7) 100%), 
                        url('background.jpg') center center/cover no-repeat;
            height: 90vh; 
            position: relative;
            overflow: hidden;
        ">
            <div class="overlay" style="
                position: absolute; 
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%; 
                background-color: rgba(74, 78, 105, 0.3); 
                transition: background 0.5s ease-in-out;
            "></div>
    
            <div class="container" style="
                position: relative; 
                z-index: 1; 
                display: flex; 
                flex-direction: column; 
                justify-content: center; 
                align-items: center; 
                height: 80%; 
                text-align: center; 
                color: #F2E9E4;
            ">
                <h1 class="display-4 animated fadeInDown" style="animation-delay: 0.5s; font-size: 3.5rem;">Welcome to Bharat Hardware Stores</h1>
                <p class="lead animated fadeInUp" style="animation-delay: 1s; font-size: 1.5rem; margin-top: 15px;">Your one-stop destination for all hardware needs</p>
                
                <a href="shopnow.php" class="btn btn-primary btn-lg" style="
                    background-color: #F67280; 
                    border: none; 
                    padding: 15px 40px; 
                    font-size: 1.25rem; 
                    margin-top: 30px; 
                    transition: all 0.3s ease; 
                    position: relative; 
                    overflow: hidden;
                ">
                    <span style="position: relative; z-index: 2;">Shop Now</span>
                    <span style="
                        position: absolute; 
                        top: 0; 
                        left: 0; 
                        right: 0; 
                        bottom: 0; 
                        background-color: rgba(255, 255, 255, 0.2); 
                        transition: all 0.3s ease; 
                        z-index: 1;
                    "></span>
                </a>
            </div>
        </section>
    
        <style>
            .btn:hover {
                transform: scale(1.05);
            }
    
            .btn span {
                position: relative;
                z-index: 2;
            }
    
            .btn:hover span {
                color: #fff;
            }
        </style>
    </header>  
    
    <!-- Tools Offers Section -->
<section id="offers" class="offers-section">
    <div class="container mt-5">
        <div class="row">

            <!-- Diwali Sale Card -->
            <div class="col-md-8 mb-4">
                <div class="discount-card p-4" style="
                    background-color: #f0f4f8; /* Light gray background */
                    border-radius: 15px; 
                    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2); 
                    position: relative; 
                    overflow: hidden;
                    height: 100%; /* Ensures card height consistency */
                    transition: transform 0.3s, box-shadow 0.3s; 
                ">
                    <div class="overlay" style="
                        position: absolute; 
                        top: 0; 
                        left: 0; 
                        width: 100%; 
                        height: 100%; 
                        background-color: rgba(0, 0, 0, 0.15); 
                        opacity: 0; 
                        transition: opacity 0.3s;
                    "></div>
                    
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4 class="discount-text" style="color: #2980B9; font-weight: bold;">Diwali Offers</h4>
                            <h3 class="discount-title" style="color: #34495E; font-size: 2rem; font-weight: 600;">Cutter Power Tools</h3>
                            <p style="color: #7F8C8D; font-size: 1.1rem;">""Elevate your craftsmanship this Diwali with our exclusive Cutter Power Tools. Perfect for precision cutting, these tools are a must-have for every DIY enthusiast and professional. Grab your festive discounts today!"</p>
                            <a href="diwali_sale.php" class="btn btn-dark" style="
                                background-color: #E74C3C; 
                                border: none; 
                                padding: 10px 20px; 
                                transition: background-color 0.3s, transform 0.3s;
                                font-weight: bold; /* Bolder text */
                            ">Shop Now</a>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="cutter.png" alt="Cutter Power Tools" class="img-fluid" style="
                                max-width: 80%; 
                                transition: transform 0.3s; 
                                border-radius: 15px;
                            ">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .discount-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
    }

    .discount-card:hover .overlay {
        opacity: 0.3; /* Show overlay on hover */
    }

    .btn-dark {
        background-color: #E74C3C; /* Original red */
    }

    .btn-dark:hover {
        background-color: #C0392B; /* Darker red on hover */
        transform: scale(1.1); /* Slightly increase button size */
    }

    img:hover {
        transform: scale(1.1); /* Zoom in image on hover */
    }
</style>


<script>
    // Function to add a product to the cart
    function addToCart(name, description, originalPrice, discountedPrice, image) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push({ name, description, originalPrice, discountedPrice, image });
        localStorage.setItem('cart', JSON.stringify(cart));
        alert('Product added to cart!');
        // Redirect to cart page after adding to cart
        window.location.href = 'cart.html';
    }
</script>
    
<!-- brands -->
<section class="popular-brands mt-5 text-center">
    <h2 class="font-weight-bold text-primary">Popular Brands</h2>
    <div class="row mt-4">
        <div class="col-md-3 brand-card">
            <div class="card custom-brand-card border-0" style="height: 300px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <img src="bosch.png" alt="Bosch" class="card-img custom-brand-img mb-3" style="max-height: 70px;">
                    <h5 class="card-title">Bosch</h5>
                    <p class="card-text">Leading in power tools and accessories, known for their reliability.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 brand-card">
            <div class="card custom-brand-card border-0" style="height: 300px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <img src="Black.png" alt="Black & Decker" class="card-img custom-brand-img mb-3" style="max-height: 70px;">
                    <h5 class="card-title">Black & Decker</h5>
                    <p class="card-text">Innovative tools for home improvement and DIY enthusiasts.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 brand-card">
            <div class="card custom-brand-card border-0" style="height: 300px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <img src="makita.png" alt="Makita" class="card-img custom-brand-img mb-3" style="max-height: 70px;">
                    <h5 class="card-title">Makita</h5>
                    <p class="card-text">High-performance tools designed for professional contractors.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 brand-card">
            <div class="card custom-brand-card border-0" style="height: 300px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <img src="dewalt.png" alt="DeWalt" class="card-img custom-brand-img mb-3" style="max-height: 70px;">
                    <h5 class="card-title">DeWalt</h5>
                    <p class="card-text">Durable and dependable tools tailored for heavy-duty jobs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

 <style>
    .popular-brands {
        background-color: #E8F6F3; /* Light Teal background for contrast */
        padding: 50px 0;
        border-radius: 15px; /* Rounded corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }   
    .popular-brands h2 {
        color: #4A4E69; /* Dark Lavender */
        margin-bottom: 30px; /* Space below the heading */
        font-size: 2.5rem; /* Increased font size */
    }  
    .custom-brand-card {
        background-color: #FFFFFF; /* White background for better contrast */
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 15px; /* Rounded corners */
        padding: 20px; /* Inner padding */
        border: 2px solid #D1E8E2; /* Light border */
    }   
    .custom-brand-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2); /* Increased shadow on hover */
        background-color: #81c7f9; /* Soft Green */
    }  
    .custom-brand-card:hover .card-title, 
    .custom-brand-card:hover .card-text {
        color: #FFFFFF; /* Change text color to white on hover */
    }
    .custom-brand-card .card-title {
        color: #2C3E50; /* Dark title color */
        font-weight: 600; /* Slightly bolder text */
    }   
    .custom-brand-card .card-text {
        color: #7D7D7D; /* Gray text */
        font-size: 0.9rem; /* Smaller font size for description */
    }   
    .custom-brand-card img {
        max-width: 100px;
        transition: transform 0.3s;
    } 
    .custom-brand-card:hover img {
        transform: scale(1.1); /* Image zoom effect on hover */
    }
</style>


<!-- plumbers -->
<section class="plumbers-contact mt-5 text-center">
    <h2 class="font-weight-bold text-primary">Plumbers Contact Information</h2>
    <div class="row mt-4 justify-content-center">
        <div class="col-md-4">
            <div class="card plumber-card border-0">
                <div class="card-body">
                    <h5 class="card-title">Ram Sharma</h5>
                    <p class="card-text">Contact: +91 98765 43210</p>
                    <p class="card-text">Availability: 9 AM - 6 PM</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card plumber-card border-0">
                <div class="card-body">
                    <h5 class="card-title">Ravi Mehta</h5>
                    <p class="card-text">Contact: +91 98765 43211</p>
                    <p class="card-text">Availability: 10 AM - 7 PM</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card plumber-card border-0">
                <div class="card-body">
                    <h5 class="card-title">Ramesh Patel</h5>
                    <p class="card-text">Contact: +91 98765 43212</p>
                    <p class="card-text">Availability: 8 AM - 5 PM</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .plumbers-contact {
        background-color: #E3F2FD; /* Light blue background */
        padding: 50px 0;
        border-radius: 15px; /* Rounded corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
    
    .plumbers-contact h2 {
        color: #0D47A1; /* Dark blue */
        margin-bottom: 30px; /* Space below heading */
        font-size: 2.5rem; /* Increased font size */
    }
    
    .plumber-card {
        background-color: #BBDEFB; /* Light blue */
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 15px; /* Rounded corners */
        padding: 20px; /* Inner padding */
        border: 2px solid #2196F3; /* Blue border */
        position: relative; /* For pseudo-element positioning */
        overflow: hidden; /* Prevents overflow of pseudo-element */
    }

    .plumber-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.2); /* Semi-transparent overlay */
        opacity: 0; /* Start hidden */
        transition: opacity 0.3s; /* Smooth transition */
        border-radius: 15px; /* Match card corners */
    }

    .plumber-card:hover {
        transform: translateY(-10px) scale(1.05); /* Scale up on hover */
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3); /* Increased shadow on hover */
    }

    .plumber-card:hover::before {
        opacity: 1; /* Show overlay on hover */
    }

    .plumber-card:hover .card-title,
    .plumber-card:hover .card-text {
        color: #0e0000; /* Change text color to white on hover */
    }

    .plumber-card .card-title {
        color: #0D47A1; /* Darker title color */
        font-weight: 600; /* Slightly bolder text */
    }
    
    .plumber-card .card-text {
        color: #0D47A1; /* Darker text color */
        font-size: 0.9rem; /* Smaller font size for description */
    }
</style>

   <!-- Wholesale Section -->
<section class="container my-5">
    <h2 class="text-center mb-4">Wholesale Sales at Bharat Hardware Stores</h2>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="wholesale-card" onmouseover="showDetails(this)" onmouseout="hideDetails(this)">
                <div class="wholesale-info">
                    <h3>Bulk Discounts</h3>
                    <p>Get exclusive discounts when you buy in bulk!</p>
                </div>
                <div class="wholesale-details">
                    <p>• Up to 30% off on bulk orders.</p>
                    <p>• Priority delivery for wholesale customers.</p>
                    <p>• Exclusive offers on large purchases.</p>
                </div>
                <a href="wholesale.php" class="btn btn-wholesale mt-3">Contact for Wholesale</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wholesale-card" onmouseover="showDetails(this)" onmouseout="hideDetails(this)">
                <div class="wholesale-info">
                    <h3>Personalized Support</h3>
                    <p>We provide dedicated support for wholesale buyers.</p>
                </div>
                <div class="wholesale-details">
                    <p>• Tailored recommendations for your business needs.</p>
                    <p>• On-site assistance for large-scale projects.</p>
                    <p>• Priority customer service.</p>
                </div>
                <a href="wholesale.php" class="btn btn-wholesale mt-3">Contact for Wholesale</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wholesale-card" onmouseover="showDetails(this)" onmouseout="hideDetails(this)">
                <div class="wholesale-info">
                    <h3>Exclusive Offers</h3>
                    <p>Discover special deals for wholesale clients.</p>
                </div>
                <div class="wholesale-details">
                    <p>• Access to limited-time promotions.</p>
                    <p>• Discounts on seasonal products.</p>
                    <p>• Invitations to exclusive events.</p>
                </div>
                <a href="wholesale.php" class="btn btn-wholesale mt-3">Contact for Wholesale</a>
            </div>
        </div>
    </div>
</section>
<style>
    .wholesale-card {
        padding: 20px;
        background-color: #BBDEFB; /* Light blue background */
        border-radius: 10px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden; /* Prevent overflow from details */
    }

    .wholesale-card:hover {
        transform: translateY(-5px); /* Lift effect on hover */
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
    }

    .wholesale-info {
        transition: opacity 0.3s ease;
    }

    .wholesale-details {
        display: none;
        background-color: #E8F6F3; /* Slightly darker blue for details */
        padding: 15px;
        border-radius: 8px; /* Rounded corners for details */
        margin-top: 10px; /* Space above details */
    }

    .wholesale-card:hover .wholesale-details {
        display: block; /* Show details on hover */
    }

    .btn-wholesale {
        background-color: #F67280; /* Coral color for button */
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s ease; /* Smooth transition for button color */
    }

    .btn-wholesale:hover {
        background-color: #E7516C; /* Darker coral on hover */
    }
</style>
<script>
    function showDetails(card) {
        const details = card.querySelector('.wholesale-details');
        details.style.display = 'block'; // Show details on hover
    }

    function hideDetails(card) {
        const details = card.querySelector('.wholesale-details');
        details.style.display = 'none'; // Hide details when not hovering
    }
</script>

<!-- Our Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="service-card p-4 text-center">
                    <h4>Expert Consultation</h4>
                    <p>Get professional advice on the best tools for your projects.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card p-4 text-center">
                    <h4>Delivery Services</h4>
                    <p>Fast and reliable delivery for all your hardware needs.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card p-4 text-center">
                    <h4>Installation Services</h4>
                    <p>We provide installation services for all purchased equipment.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .services-section {
        background-color: #e0eefb; /* Soft, light background color */
        padding: 50px 0;
        border-radius: 15px; /* Rounded corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }

    .services-section h2 {
        color: #2D4B3A; /* Dark green for the title */
        font-size: 2.5rem; /* Title size */
    }

    .service-card {
        background-color: #BBDEFB; /* Fresh, light green color */
        border-radius: 15px; /* Rounded corners */
        transition: transform 0.3s, box-shadow 0.3s; /* Animation on hover */
        padding: 30px; /* Increased padding for better spacing */
        margin-bottom: 20px; /* Space between cards */
    }

    .service-card:hover {
        transform: translateY(-5px); /* Lift effect on hover */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); /* Shadow on hover */
    }

    .service-card h4 {
        color: #1B3A5D; /* Darker blue for the heading */
        font-weight: bold; /* Bold heading */
    }

    .service-card p {
        color: #3C3C3C; /* Dark gray for the paragraph text */
    }

    /* Media Query for responsiveness */
    @media (max-width: 768px) {
        .service-card {
            margin-bottom: 30px; /* More space on smaller screens */
        }
    }
</style>

<!-- Footer -->
<footer class="footer text-white">
    <div class="footer-content py-5" style="background-image: url('footerback.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <!-- Logo and Social Media Section -->
                <div class="col-md-3">
                    <h4 class="text-white">Bharat Hardware Stores</h4>
                    <p class="mt-2">Connect with us:</p>
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank">
                            <img src="https://img.icons8.com/ios-filled/30/ffffff/facebook.png" alt="Facebook" class="footer-icon">
                        </a>
                        <a href="https://twitter.com" target="_blank">
                            <img src="https://img.icons8.com/ios-filled/30/ffffff/twitter.png" alt="Twitter" class="footer-icon">
                        </a>
                        <a href="https://instagram.com" target="_blank">
                            <img src="https://img.icons8.com/ios-filled/30/ffffff/instagram-new.png" alt="Instagram" class="footer-icon">
                        </a>
                        <a href="https://youtube.com" target="_blank">
                            <img src="https://img.icons8.com/ios-filled/30/ffffff/youtube-play.png" alt="YouTube" class="footer-icon">
                        </a>
                    </div>
                </div>

                <!-- Help Section -->
                <div class="col-md-2">
                    <h5>Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white hover-effect">Deliveries</a></li>
                        <li><a href="#" class="text-white hover-effect">Help</a></li>
                        <li><a href="#" class="text-white hover-effect">Information</a></li>
                        <li><a href="#" class="text-white hover-effect">Privacy Policy</a></li>
                        <li><a href="#" class="text-white hover-effect">Shipping Details</a></li>
                    </ul>
                </div>

                <!-- Support Section -->
                <div class="col-md-2">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white hover-effect">Policies</a></li>
                        <li><a href="#" class="text-white hover-effect">Orders</a></li>
                        <li><a href="#" class="text-white hover-effect">Careers</a></li>
                        <li><a href="#" class="text-white hover-effect">Refund & Return</a></li>
                    </ul>
                </div>

                <!-- Information Section -->
                <div class="col-md-2">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white hover-effect">Search Terms</a></li>
                        <li><a href="#" class="text-white hover-effect">Advanced Search</a></li>
                        <li><a href="#" class="text-white hover-effect">Help & FAQs</a></li>
                        <li><a href="#" class="text-white hover-effect">Store Location</a></li>
                        <li><a href="#" class="text-white hover-effect">Order & Return</a></li>
                    </ul>
                </div>

                <!-- Privacy Section -->
                <div class="col-md-2">
                    <h5>Privacy</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white hover-effect">Milestones</a></li>
                        <li><a href="#" class="text-white hover-effect">Cancellation</a></li>
                        <li><a href="#" class="text-white hover-effect">Reviews</a></li>
                        <li><a href="#" class="text-white hover-effect">Chat</a></li>
                        <li><a href="#" class="text-white hover-effect">E-mail</a></li>
                    </ul>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <h5 class="text-center mb-3">Contact Us</h5>
                    <p class="text-center">If you have any questions or inquiries, feel free to reach out to us:</p>
                    <ul class="list-unstyled text-center">
                        <li class="mb-2">
                            <a href="mailto:info@bharathardware.com" class="text-white hover-effect">Email:bharathardware@gmail.com</a>
                        </li>
                        <li class="mb-2">
                            <a href="tel:+919876543210" class="text-white hover-effect">Phone: +91 98508 55523</a>
                        </li>
                        <li class="mb-2">Address: No 2, Mutha Market, Narayangaon, Narayangaon - 410504</li>
                    </ul>
                </div>
            </div>
            
            <style>
                .hover-effect {
                    transition: color 0.3s ease, transform 0.3s ease; /* Transition for smooth effects */
                }
            
                .hover-effect:hover {
                    color: #F67280; /* Change to your preferred hover color */
                    transform: scale(1.05); /* Slightly enlarge text on hover */
                }
            
                .text-center {
                    text-align: center; /* Center text for better alignment */
                }
                
                /* Optional: Add a background color and padding for better visibility */
                .row {
                    background-color: rgba(255, 255, 255, 0.1); /* Light background */
                    border-radius: 10px; /* Rounded corners */
                    padding: 20px; /* Inner padding */
                    margin-top: 20px; /* Spacing from other elements */
                }
            </style>
            
            </div>
        </div>
    </div>
</footer>
<style>
    .footer {
        position: relative;
        overflow: hidden; /* Ensure no overflow */
    }

    .footer-content {
        position: relative;
        z-index: 1; /* Ensure content is above background */
    }

    .hover-effect {
        transition: color 0.3s ease, transform 0.3s ease; /* Added transform for scale effect */
    }

    .hover-effect:hover {
        color: #F67280; /* Change to your preferred hover color */
        transform: scale(1.05); /* Slightly enlarge text on hover */
    }

    .footer-icon {
        width: 30px; /* Adjust icon size as needed */
        margin-right: 10px; /* Space between icons */
        transition: transform 0.3s ease; /* Smooth transition for icons */
    }

    .footer-icon:hover {
        transform: scale(1.2); /* Enlarge icons on hover */
    }

    @media (max-width: 768px) {
        .footer-icon {
            width: 25px; /* Smaller icons on mobile */
        }
    }
</style>

</script>
<script src="scripts.js"></script>
</body>
</html>
