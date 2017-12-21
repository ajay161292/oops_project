<?php
Class Pen{

	var $price;
	var $price2;

	function __construct($price,$price2){
	// function Pen($price){
		echo 'This is constructor for class : '. __CLASS__.'<br/>';
		$this->price = $price;
		$this->price2 = $price2;
		// print_r($this);
	}

	// function __destruct(){
	// 	echo 'in destructor';
	// }

	public function setprice($p){
		$this->price = 'setting price'.$p.'<br/>';
	}

	public function getprice(){
		return $this->price;
	}
} 

$obj = new Pen(20,50);
echo '<pre>';
print_r($obj);
// $obj->setprice(20);
// print $obj->getprice();

?>