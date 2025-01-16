<?php

// What is class and instance

require_once './Person.php';
require_once './Student.php';

//$p = new Person('Massawe', 28, null);
//echo $p->name.'<br>';
//echo $p->age.'<br>';
//echo $p->getSalary().'<br>';
//$p->setSalary(100);
//echo $p->getSalary().'<br>';

// Create a Student instance
$s = new Student("Massawe", 28, 1234);

$q = new Student("Mangi Flani", 28, 3412);

// Access and display the Student object properties
echo "Student Name: " . $s->name . "<br>";
echo "Student Age: " . $s->age . "<br>";
echo "Student ID: " . $s->stId . "<br>";
"<br>";
echo "Lecture Name: " . $q->name . "<br>";
echo "Lecture Age: " . $q->age . "<br>";
echo "Lecture ID: " . $q->stId . "<br>";
// Demonstrate the static counter
echo "Student Created: " . Person::getCounter() . "<br>";
echo "Lecture Created: " . Person::getCounter() . "<br>";

// Modify and access salary (demonstrating inheritance and encapsulation)
$s->setSalary(50000);
echo "Student Salary (set using setter): " . $s->getSalary() . "<br>";
