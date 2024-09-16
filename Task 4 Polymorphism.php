<?php

// Base class Animal
abstract class Animal {
    // Abstract method to be overridden by subclasses
    abstract public function makeSound();
}

// Dog class extending Animal
class Dog extends Animal {
    // Override the makeSound method
    public function makeSound() {
        return "Woof!";
    }
}

// Cat class extending Animal
class Cat extends Animal {
    // Override the makeSound method
    public function makeSound() {
        return "Meow!";
    }
}

// Cow class extending Animal
class Cow extends Animal {
    // Override the makeSound method
    public function makeSound() {
        return "Moo!";
    }
}

// Function to demonstrate polymorphism
function demonstratePolymorphism(Animal $animal) {
    echo $animal->makeSound() . "\n";
}

// Example usage
$animals = [new Dog(), new Cat(), new Cow()];

foreach ($animals as $animal) {
    demonstratePolymorphism($animal);
}

?>
