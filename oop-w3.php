<?php 

class Fruit {

	public $name;
	public $color;

	const NAME_OF_THE_FRUIT = "You have to choose the name";

	public function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
	} 
	protected function intro() {
		echo "the fruit is {$this->name}, and the color is {$this->color}";
	}
}

class Strawberry extends Fruit {
	public function message() {
		echo "Am I a fruit or a berry";
		$this->intro;
	}
}

$strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();

echo Fruit::NAME_OF_THE_FRUIT;