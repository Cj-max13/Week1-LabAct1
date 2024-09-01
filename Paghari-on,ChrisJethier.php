<?php
class Person {
    public $firstname;
    public $lastname;
    private $age;

    
    function __construct(string $fname, $lname, int $age) {
        $this->firstname = $fname;
        $this->lastname = $lname;
        $this->age = $age;
    }

    
    public function getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    }

    
    public function setAge($age) {
        $this->age = $age;
    }

    
    public function getAge() {
        return $this->age;
    }
    public function displayAge(){
        echo "Updated Age: $this->age" . "\n";
    }
}

class Car {
    public $make;
    public $model;
    protected $year;

    
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    
    public function getCarInfo() {
        return $this->make . ' ' . $this->model . ',  ' . $this->year;
    }
}


$person = new Person('chris', 'paghar-on', 19);


echo "Full Name: " . $person->getFullName() . "\n";
echo "Age: " . $person->getAge() . "\n";
$person->setAge(25);
$person->displayAge();

$car = new Car('Mercedes-Benz', ', McLaren 999 Red Gold Dream', '(2009)');


echo "Car Info: " . $car->getCarInfo() . "\n";
?>
