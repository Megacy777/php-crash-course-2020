<?php
// Encapsulates the collection of students and teachers and provides methods to add and retrieve them.

require_once 'Student.php';
require_once 'Teacher.php';

class School {
    private $students = [];
    private $teachers = [];

    public function addStudent(Student $student) {
        $this->students[] = $student;
    }

    public function addTeacher(Teacher $teacher) {
        $this->teachers[] = $teacher;
    }

    public function getStudents() {
        return $this->students;
    }

    public function getTeachers() {
        return $this->teachers;
    }
}
