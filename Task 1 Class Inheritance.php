<?php

// Base class for all shapes
abstract class Shape {
    // Abstract method for calculating area, to be implemented by subclasses
    abstract public function getArea();
}

// Circle class extending Shape
class Circle extends Shape {
    private $radius;

    // Constructor to initialize the radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Method to calculate the area of the circle
    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class extending Shape
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor to initialize width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Method to calculate the area of the rectangle
    public function getArea() {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(5);
echo "Area of the circle: " . $circle->getArea() . " square units\n";

$rectangle = new Rectangle(4, 6);
echo "Area of the rectangle: " . $rectangle->getArea() . " square units\n";

?>
