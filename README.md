﻿
# PHP Tutorial

This tutorial will guide you through the basics of PHP programming.

## Table of Contents

1. [Setting Up Your Environment](#setting-up-your-environment)
2. [PHP Syntax and Variables](#php-syntax-and-variables)
3. [Control Structures](#control-structures)
4. [Functions](#functions)
5. [Arrays](#arrays)
6. [Forms and User Input](#forms-and-user-input)
7. [Handling Form Submission](#handling-form-submission)
8. [Class](#Class)
9. [Working with Databases](#working-with-databases)
10. [Object-Oriented Programming (OOP)](#object-oriented-programming-oop)

## Setting Up Your Environment

Before you start coding, make sure you have a PHP environment set up. You can use XAMPP, MAMP, or any other local server. Alternatively, you can use online platforms like Repl.it or PHP Fiddle for quick testing.

## PHP Syntax and Variables

Create a new PHP file (e.g., index.php) and write a simple script:

```php
<?php
// This is a comment

// Variables
$name = "John";
$age = 25;

// Output
echo "Hello, $name! You are $age years old.";
?>
```
This script declares variables, assigns values, and uses echo to output a message.

## Control Structures

Expand your script to include control structures:

```php
<?php
$temperature = 20;

// If statement
if ($temperature > 30) {
    echo "It's hot outside!";
} elseif ($temperature > 15) {
    echo "It's a pleasant day.";
} else {
    echo "It's a bit chilly.";
}
?>
```
This script checks the temperature and outputs a message accordingly.

## Functions

Create a simple function:

```php
<?php
// Function
function greet($name) {
    return "Hello, $name!";
}

// Call the function
echo greet("Alice");
?>
```
This script defines a function greet and calls it with a parameter.

## Arrays

Learn about arrays:

```php
<?php
// Indexed array
$fruits = array("Apple", "Banana", "Orange");

// Associative array
$info = array("name" => "John", "age" => 25, "city" => "New York");

// Output
echo $fruits[0]; // Outputs: Apple
echo $info["age"]; // Outputs: 25
?>
```
This script demonstrates both indexed and associative arrays.

## Forms and User Input

Create an HTML form to get user input:

```html
<!DOCTYPE html>
<html>
<head>
    <title>User Input Form</title>
</head>
<body>
    <form method="post" action="process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
```

## Handling Form Submission

Create process.php to handle the form submission:

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username from the form
    $username = $_POST["username"];
    
    // Output
    echo "Hello, $username!";
}
?>
```

## Class
Learn the basics of classes in PHP:

```php
// Class instantiation
$myCar = new Car("Toyota", "Camry");

// Accessing properties
echo "Brand: " . $myCar->brand . "<br>";
echo "Model: " . $myCar->model . "<br>";

// Class method
class Car {
    // ... (previous code)

    // Method
    public function startEngine() {
        return "Engine started!";
    }
}

// Instantiate the class
$myCar = new Car("Toyota", "Camry");

// Call the method
echo $myCar->startEngine();

```

## Working with Databases

Learn basic database operations using MySQL and PHP:

```php
<?php
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
```
This script connects to a MySQL database and retrieves user data.

## Object-Oriented Programming (OOP)

Learn the basics of OOP in PHP:

```php
<?php
// Class definition
class Car {
    // Properties
    public $brand;
    public $model;

    // Constructor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
}
?>
```

