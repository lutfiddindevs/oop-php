<?php 

 #static properties 
// class Pi {
// 	public static $value = 3.14159;
// }

// echo Pi::$value . "<br>";

#another example accessing from a method in the same class
// class Pi {
// 	public static $value = 3.14159;
// 	public function static_value() {
// 		return self::$value;
// 	}
// }

// $pi = new Pi();
// echo $pi->static_value();

#one more calling from a child class
class Pi {
	public static $value = 3.14159;
}

class X extends Pi {
	public function x_static() {
		return parent::$value;
	}
}

//getting directly from a child class
echo X::$value;

//or through x_static method
$x = new X();
echo $x->x_static();
