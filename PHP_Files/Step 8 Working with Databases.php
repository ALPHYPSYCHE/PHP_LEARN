<?php
// Learn basic database operations using MySQL and PHP.
// This script connects to a MySQL database and retrieves user data.


// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform a SQL query
$sql = "SELECT id, name, age FROM users";
$result = $conn->query($sql);

// Output data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
