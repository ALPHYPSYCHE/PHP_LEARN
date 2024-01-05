<?php
// Create process.php to handle the form submission.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username from the form
    $username = $_POST["username"];
    
    // Output
    echo "Hello, $username!";
}
?>
