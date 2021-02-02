<?php  

#example one using static method
// class Greeting {
// 	public static function welcome() {
// 		echo "Hello world!";
// 	}
// }

// Greeting::welcome();

#another example accessing a static method in the same class
// class Greeting {
// 	public static function welcome() {
// 		echo "Hello Lutfiddin!";
// 	}
//     public function __construct() {
//     	self::welcome();
//     }
// }

// new Greeting();

#another example 
// class Greeting {
// 	public static function welcome() {
// 		echo "Hello Mr.Lutfiddin";
// 	}
// }

// class Meeting {
// 	public function message() {
// 		Greeting::welcome();
// 	}
// }

// $object = new Meeting();
// $object->message();

#one more with protected modifier 
class Domain {
	protected static function get_website_name() {
		return "W3schools";
	}
} 

class Domain3 extends Domain {
	public $webiste_name;
	public function __construct() {
		$this->webiste_name = parent::get_website_name();
	}
}
$domain3 = new Domain3();
echo $domain3->webiste_name;
