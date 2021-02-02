<?php  

# Object Oriented Programming in php with class and object concepts
class Student {

	//properties || variables 
	public $name;
	public $id;
	public $program;
	public $field;

	//methods || functions
	function set_name($name) {
		$this->name = $name;
	}
	function get_name() {
		return $this->name;
	}
	function set_id($id) {
		$this->id = $id;
	}
	function get_id(){
		return $this->id;
	}
	function set_program($program) {
		$this->program = $program;
	}
	function get_program() {
		return $this->program;
	}
	function set_field($field) {
		$this->field = $field;
	}
	function get_field() {
		return $this->field;
	}
}
//objects are created with the keyword  new
$student1 = new Student();
$student2 = new Student();
$student1->set_name("John");
$student2->set_name("Jane");
$student1->set_id("0073");
$student2->set_id("0102");
$student3 = new Student();
$student3->set_name("Jack");
$student3->set_id("0105");
$student1->set_program("International Foundations Programs");
$student3->set_program("Information Technologies");
$student2->set_program("International Foundation Programs");
$student1->set_field("Backend Developer");
$student2->set_field("Frontend Developer");
$student3->set_field("Mobile Developer");
//outputting the results
echo $student1->get_name() . " " . $student1->get_program() . " " .   $student1->get_id() . " " . $student1->get_field() . "<br>";
echo $student2->get_name() .  " " . $student2->get_program() . " " . $student2->get_id() . " " . $student2->get_field() . "<br>";
echo $student3->get_name() . " " .  $student3->get_program() . " " . $student3->get_id() . " " . $student3->get_field() . "<br>";
var_dump($student2 instanceof Student);

echo "<br>";
echo "<br>";


class Car {
	public $name;
	public $brand;
	public $year;

	function __construct($name) {
		$this->name = $name;
	}
	function get_name() {
		return $this->name;
	}
}

$bmv = new Car("BMW");
echo $bmv->get_name();
echo "<br>";

class University {
	public $name;
	public $field;

	function __construct($name, $field) {
		$this->name = $name;
		$this->field = $field;
	}
	function get_name() {
		return $this->name;
	}
	function get_field() {
        return $this->field;
	}
}

$amity = new University("AUT", "Technology");
echo $amity->get_name();
echo "<br>";
echo $amity->get_field();


class Teacher {
	public $name;
	public $degree;
	public $age;

	function __construct($name, $degree, $age) {
		$this->name = $name;
		$this->degree = $degree;
		$this->age = $age;
	}
	function __destruct() {
		echo "Teacher is {$this->name}, {$this->degree}, {$this->age}";
	}
} 

$teacher = new Teacher("Moxit","Master", "32");
echo "<br>";


echo "<br>";
class Market {
	public $name;
	public $location;

	function __construct($name, $location) {
		$this->name = $name;
		$this->location = $location;
	}
	function __destruct() {
		echo "The Market is {$this->name} and the location is {$this->location}";
	}
}

$Chashma = new Market("Chashma", "Qarabag city");


class Fruit {
	public $name;
	protected $color;
	private $price;
}

$mango = new Fruit();
$mango->name = "Mango";
$mango->color = "green"; //Error coz color is set to protected access
$mango->price = "$10"; //Error beacuse price is set to private access


class Goalkeeper {
	public $name;
	public $team;
	public $salary; 

	function set_name($n) {
		$this->name = $n;
	}
	public function set_team($t) {
		$this->team = $t;
	}
	public function set_salary($s) {
		$this->salary = $s;
	} 
}

$buffon = new Goalkeeper();
$buffon->set_name("Buffon");
$buffon->set_team("Juventus");
$buffon->set_salary("$12000");

class NewCar {
    public $name;
    public $year;
    public $price;

    public function __construct($name, $year, $price) {
      $this->name = $name;
      $this->year = $year;
      $this->price = $price;
    }


}




