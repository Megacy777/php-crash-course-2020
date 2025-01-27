<?php
// 1. Class: Blueprint for creating objects.  
// 2. Object: Instance of a class.  
// 3. Instance: A specific object created from a class.  
// 4. Constructor: A special method in a class used to initialize objects 
//    and set default values when an instance is created.
//       => We use constructors to:  
//            -> Initialize objects with default or custom values.  
//            -> Automate setup of properties when an object is created.  
//            -> Ensure the object is ready to use immediately after instantiation.
// 5. Encapsulation: Bundling data and methods, restricting direct access.  
// 6. Inheritance: Reusing properties and methods from a parent class.  
// 7. Polymorphism: Performing a single action in different ways.  
// 8. Abstraction: Hiding implementation details, exposing only the essentials.
class Car {

  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

  function set_color($color) {
    $this->color = $color;
  }

  function get_color() {
    return $this->color;
  }
}
// with constructor 
$car = new Car("Ferrari Countach", "Midnight Blue");
echo "Car Name: " . $car->get_name() . "<br>Car Color: " . $car->get_color();

echo "<br>";

// without constructor
$car-> set_name('Mercedes 4 MATIC');
$car-> set_color('Charcoal Black');
echo $car->get_name(). "<br>";
echo$car->get_color(). "<br>";