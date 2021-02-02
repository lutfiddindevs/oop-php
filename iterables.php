<?php  

// function printIterable(iterable $myIterable) {
// 	foreach ($myIterable as $item) {
// 		echo $item;
// 	}
// }

// $arr = ['yellow', 'blue', 'red', 'black'];
// printIterable($arr);

#returning an iterable 
// function getIterable():iterable {
// 	return ['red', 'blue', 'yellow'];
// }

// $myIterable = getIterable();
// foreach ($myIterable as $item) {
// 	echo $item;
// }


#creating an iterator
class MyIterator implements iterator {
	private $items = [];
	private $pointer = 0;

	public function __construct($item) {
		//array values - make sure that the keys are numbers
		$this->items = array_values($items);
	}

	public function current() {
		return $this->items[$this->pointer];
	}

	public function key() {
        return $this->pointer;
	}

	public function next() {
		$this->pointer++;
	}

	public function rewind() {
		$this->pointer = 0;
	}

	public function valid() {
		return $this->pointer < count($this->items);
	}
}

//function uses iterables 
function printIterable(iterable $myIterable) {
    foreach ($myIterable as $item) {
    	echo $item;
    }
}

//use iterable as iterator 
$iterator = new MyIterator(['Lutfiddin', 'Mukhammadamin', 'Narzullo']);
printIterable($iterator);

