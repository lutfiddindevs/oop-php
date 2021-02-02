<?php 

// interface Animal {
// 	public function make_sound();
// }

// class Cat implements Animal {
// 	public function make_sound() {
// 		echo "Meow";
// 	}
// }

// $animal = new Cat();
// echo $animal->make_sound(); 

#another example 

//interface definition
interface Animal {
	public function make_sound();
}

//class definitons 
class Cat implements Animal {
	public function make_sound() {
		echo " Meow ";
	}
}

class Dog implements Animal {
	public function make_sound() {
		echo " Bark ";
	}
}

class Mouse implements Animal {
	public function make_sound() {
		echo " Squek ";
	}
}

//creating objects || list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = [$cat, $dog, $mouse];

//Tell the animals to make a sound 
foreach ($animals as $key => $animal) {
	$animal->make_sound();
}

