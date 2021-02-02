<?php 

//parent class
// abstract class Car {
// 	public $name;
// 	public function __construct($name) {
// 		$this->name = $name;
// 	} 
//     abstract public function intro() : string;

// }

// //child classes 
// class Audi extends Car {
// 	public function intro() : string {
// 		return "Choose german car because they are powerful! I am an {$this->name}";
// 	}
// }

// class Volvo extends Car {
// 	public function intro() : string {
// 		return "Proud to be Swedish! I am an $this->name";
// 	}
// }

// class Citroen extends Car {
// 	public function intro() : string {
// 		return "Glad to be French! I am an {$this->name}";
// 	}
// }

// //Create objects from child classes
// $audi = new Audi("Audi");
// echo $audi->intro() . "<br>";

// $volvo = new Volvo("Volvo");
// echo $volvo->intro(). "<br>";

// $citreon = new Citroen("Citreon");
// echo $citreon->intro();


#another example

// abstract class Prefix {
// 	//abstract method with argument
// 	abstract protected function prefixName($name); 
// }

// //child class
// class MenAndWomen extends Prefix {
// 	public function prefixName($name) {
// 		if ($name === "John Doe") {
// 			$prefix = "Mr.";
// 		} elseif ($name === "Jane Doe") {
// 			$prefix = "Mrs.";
// 		} else {
// 			$prefix = "";
// 		}
// 		return "{$prefix} {$name}";
// 	}
// }

// //create objects from child class

// $pref =  new MenAndWomen();
// echo $pref->prefixName("Jane Doe") . "<br>";
// echo $pref->prefixName("John Doe");


#one more example to consolidate abstract classes
abstract class Prefix {
	//abstract method with an argument
	abstract protected function prefixName($name);
}

class MenAndWomen extends Prefix {
	public function prefixName($name, $separator = ".", $greet = "Dear") {
		if ($name === "John Doe") {
			$prefix = "Mr";
		}elseif ($name === "Jane Doe") {
			$prefix = "Mrs";
		} else {
			$prefix = " ";
		}
		return "{$greet} {$prefix}{$separator} {$name}";
	}
}

$pref = new MenAndWomen();
echo $pref->prefixName("John Doe") . "<br>";
echo $pref->prefixName("Jane Doe");