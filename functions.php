<?php  

$operator = $_POST['oper'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];



class Calculator {
	public $operator;
	public $number1;
	public $number2;

	public function __construct(string $operator, int $number1, int $number2) {
		$this->operator = $operator;
		$this->number1 = $number1;
		$this->number2 = $number2;
	}

	public function calculate() {
		switch ($this->operator) {
			case 'none':
				$result = "Please choose the operator!";
				return $result;
				break;
			case 'add':
                $result = $this->number1 + $this->number2;
                return $result;
            case 'substract':
            	$result = $this->number1 - $this->number2;
            	return $result;
            	break;
            case 'multiply':
            	$result = $this->number1 * $this->number2;
            	return $result;
            	break;
            case 'divide':
            	$result = $this->number1 / $this->number2;
            	return $result;
            	break;
			default:
				$result = 'There was an error';
				break;
		}
	}
}

$calc = new Calculator((string)$operator, (int) $number1, (int) $number2);
echo $calc->calculate();


