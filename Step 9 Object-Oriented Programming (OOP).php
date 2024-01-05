<?php
// Learn the basics of OOP in PHP.
// This script demonstrates a simple class and object in PHP.

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

    // Method
    public function displayInfo() {
        echo "Brand: $this->brand, Model: $this->model";
    }
}

// Create an object
$myCar = new Car("Toyota", "Camry");

// Call a method
$myCar->displayInfo();
?>
