<?php
// The main script to create instances, add them to the school, and display details about the students and teachers.

require_once 'classes/School.php';
require_once 'classes/Student.php';
require_once 'classes/Teacher.php';

$school = new School();

// Create students
$student1 = new Student("Alice", 15, "10th Grade");
$student2 = new Student("Bob Sarget", 14, "9th Grade");

// Create teachers
$teacher1 = new Teacher("Mr. Smith", 40, "Mathematics");
$teacher2 = new Teacher("Ms. Jada", 35, "English");

// Add students and teachers to school
$school->addStudent($student1);
$school->addStudent($student2);
$school->addTeacher($teacher1);
$school->addTeacher($teacher2);

// Display students and teachers
echo "<h2>Students:</h2>";
foreach ($school->getStudents() as $student) {
    echo "{$student->getRole()}: {$student->getGrade()} - {$student->study()}<br>";
}

echo "<h2>Teachers:</h2>";
foreach ($school->getTeachers() as $teacher) {
    echo "{$teacher->getRole()}: {$teacher->teach()}<br>";
}
