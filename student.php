<?php 
class Student{
    public string $name;
    public int $age;
    public ?float $salary;

    public function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
}
//contructor obj $p
$p = new Student('Kakolanya', 27, null);
//
//$p = new Student();
//$p->name = 'Mwalukombe';
//$p->age = 27;
//$p->salary = 3400000;

echo'<pre>';
var_dump($p);
echo'<pre>';