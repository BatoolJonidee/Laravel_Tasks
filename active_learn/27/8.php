<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function introduce() {
        echo "Hi, my name is {$this->name} and I am {$this->age} years old.";
    }
}

class Student extends Person {
    public $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }
    public function introduce() {
        echo "Hi, I'm a student! My name is {$this->name}, I am {$this->age} years old, and my student ID is {$this->studentId}.";
    }
}

$person = new Person("Alice", 25);

$student = new Student("Bob", 20, "12345");

$person->introduce();
echo "<br>";

$student->introduce();

?>