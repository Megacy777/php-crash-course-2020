<?php
// Inherits Person, adds a subject property, and implements the getRole() method.

require_once 'Person.php';

class Teacher extends Person {
    private $subject;

    public function __construct($name, $age, $subject) {
        parent::__construct($name, $age);  // Calling parent constructor
        $this->subject = $subject;
    }

    public function getRole() {
        return "Teacher";  // Implementation of abstract method
    }

    public function teach() {
        echo "{$this->name} is teaching {$this->subject}.<br>";
    }
}
