<?php
// Inherits Person, adds a grade property, and implements the getRole() method.
require_once 'Person.php';

class Student extends Person {
    private $grade;

    public function __construct($name, $age, $grade) {
        parent::__construct($name, $age);  // Calling parent constructor
        $this->grade = $grade;
    }

    public function getRole() {
        return "Student";  // Implementation of abstract method
    }

    public function getGrade() {
        return $this->grade;
    }

    public function study() {
        echo "{$this->name} is studying for grade {$this->grade}.<br>";
    }
}
