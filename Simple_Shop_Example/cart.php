<?php

session_start();
include 'products.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['action']) && isset($_GET['id'])) {
    $productId = $_GET['id'];

    if ($_GET['action'] === 'add') {
        // Add product to the cart
        $_SESSION['cart'][$productId] = $_SESSION['cart'][$productId] + 1;
    } elseif ($_GET['action'] === 'remove') {
        // Remove product from the cart
        if ($_SESSION['cart'][$productId] > 0) {
            $_SESSION['cart'][$productId] = $_SESSION['cart'][$productId] - 1;
        }
    }
}

echo "<h1>Shopping Cart</h1>";

if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
} else {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $productId => $quantity) {
        $product = $products[$productId - 1];
        echo "<li>{$product['name']} - Quantity: $quantity <a href='cart.php?action=remove&id=$productId'>Remove from Cart</a></li>";
    }
    echo "</ul>";
}
?>
