<?php  

#namespace in oop
// namespace html;

// class Table {
// 	public $title = "";
// 	public $numRows = 0;
// 	public function message() {
// 		echo "<p>Table {$this->title} has {$this->numRows} rows</p>"; 
// 	}
// }

// $table = new Table();
// $table->title = "My table";
// $table->numRows = 5;


//  $table->message();


#another example nested namespaces 
namespace html;

class Table {
	public $title = "";
	public $numRows = 0;

	public function message() {
		echo "<p>Table {$this->title} has {$this->numRows} rows</p>.";
	}
}

class Row {
	public $numCells = 0;

	public function message() {
		echo "<p>The row has {$this->numCells} cells</p>";
	}
}



