<?php
session_start();

// Check if the index is passed in the URL
if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Remove the item from the cart
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
    }
}

// Redirect back to the cart page
header('Location: cart.php');
exit();
?>
