<?php
include 'products.php';

echo "<h1>Welcome to the Online Shop</h1>";

echo "<ul>";
foreach ($products as $product) {
    echo "<li>{$product['name']} - \${$product['price']} <a href='cart.php?action=add&id={$product['id']}'>Add to Cart</a></li>";
}
echo "</ul>";
?>
