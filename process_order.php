<?php
// Connect to MySQL database
$servername = "localhost";  // Your server (if running locally, it will be localhost)
$username = "root";         // Your MySQL username (default is root for localhost)
$password = "";             // Your MySQL password (default is empty for localhost)
$dbname = "hardware_store"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form submission
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$cart = json_decode($_POST['cartData'], true); // Decode JSON cart data
$totalPrice = $_POST['totalPrice'];            // Get total price

// Insert order into the database (order table)
$sql = "INSERT INTO orders (address, contact, email, total_amount) VALUES ('$address', '$contact', '$email', '$totalPrice')";

// Check if the query was successful
if ($conn->query($sql) === TRUE) {
    // Get the last inserted order ID
    $order_id = $conn->insert_id;

    // Insert each item into order_items table
    foreach ($cart as $item) {
        $product_name = $item['name'];
        $price = $item['price'];
        $quantity = $item['quantity'];
        
        $sql_item = "INSERT INTO order_items (order_id, product_name, price, quantity) 
                     VALUES ('$order_id', '$product_name', '$price', '$quantity')";
        $conn->query($sql_item);
    }

    // Order placed successfully
    echo "<script>alert('Your order has been placed successfully!'); window.location.href='index.php';</script>";
} else {
    // Error placing order
    echo "<script>alert('Error placing order: " . $conn->error . "'); window.history.back();</script>";
}

// Close the connection
$conn->close();
?>
