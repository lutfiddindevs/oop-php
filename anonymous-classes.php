<?php  

$obj = new class {
	public function welcome() {
		echo "Hello this is your first anonymous class";
	}
};

$obj->welcome();

// in other words anonymous classes are classes that do not have name or what we call have not been created first to make an instant of it

#one more
$objtwo = new class {
    public function say_hello() {
        $msg = 'Hello this is your second anonymous class';
        echo $msg;
    }
};

$objtwo->say_hello();

