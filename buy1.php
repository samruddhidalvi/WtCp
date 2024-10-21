<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy 1 Get 1 Free Sale</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2e9e4;
            font-family: 'Poppins', sans-serif;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 15px;
            text-align: center;
            width: 100%;
            max-width: 250px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }
        .product-image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #F67280;
        }
        .buy-button {
            margin-top: 10px;
            background-color: #4A4E69;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .buy-button:hover {
            background-color: #9A8C98;
        }
        .countdown {
            font-size: 20px;
            font-weight: bold;
            color: #F67280;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center my-4">New Arrivals</h1>

    <!-- Countdown Timer -->
    <div id="countdown" class="countdown">Sale ends in: <span id="timer"></span></div>

    <div class="row justify-content-center" id="product-list"></div>
</div>

<script>
    // Example products data in PHP
    const products = <?php echo json_encode([
        'products' => [
            [
                'name' => 'Hammer',
                'description' => 'High-quality steel hammer.',
                'price' => '₹299',
                'image' => 'hammar.jpeg'
            ],
            [
                'name' => 'Screwdriver Set',
                'description' => 'Precision screwdriver set with 10 bits.',
                'price' => '₹399',
                'image' => 'Screwdriver.jpeg'
            ],
            [
                'name' => 'Pliers',
                'description' => 'Heavy-duty pliers for all purposes.',
                'price' => '₹249',
                'image' => 'Pliers.jpeg'
            ],
            [
                'name' => 'Measuring Tape',
                'description' => '5-meter measuring tape with lock.',
                'price' => '₹199',
                'image' => 'tape.png'
            ],
            [
                'name' => 'Drill Machine',
                'description' => 'Compact drill machine with bits.',
                'price' => '₹1499',
                'image' => 'drill.jpg'
            ],
            [
                'name' => 'Wrench Set',
                'description' => 'Set of 5 adjustable wrenches.',
                'price' => '₹599',
                'image' => 'Wrench.jpeg'
            ]
        ]
    ]); ?>;

    function loadProducts() {
        const productList = document.getElementById('product-list');
        products.products.forEach(product => {
            const productCard = document.createElement('div');
            productCard.classList.add('col-md-4', 'product-card');

            // Create the URL for 'buy1get1.php' with product details as URL parameters
            const productUrl = `buy1get1.php?name=${encodeURIComponent(product.name)}&description=${encodeURIComponent(product.description)}&originalPrice=${encodeURIComponent(product.price)}&discountedPrice=${encodeURIComponent(product.price)}&image=${encodeURIComponent(product.image)}`;

            productCard.innerHTML = `
                <img src="${product.image}" alt="${product.name}" class="product-image">
                <h3>${product.name}</h3>
                <p>${product.description}</p>
                <p class="product-price">${product.price}</p>
                <button class="buy-button" onclick="window.location.href='${productUrl}'">Buy Now</button>
            `;

            productList.appendChild(productCard);
        });
    }

    // Countdown timer
    function countdownTimer(endDate) {
        let timer = setInterval(function() {
            let now = new Date().getTime();
            let timeLeft = endDate - now;

            let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById("timer").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

            if (timeLeft < 0) {
                clearInterval(timer);
                document.getElementById("timer").innerHTML = "Sale Ended";
            }
        }, 1000);
    }

    document.addEventListener('DOMContentLoaded', function() {
        loadProducts();
        // Set sale end date and start countdown
        let saleEndDate = new Date().getTime() + (2 * 24 * 60 * 60 * 1000); // Sale ends in 2 days
        countdownTimer(saleEndDate);
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
