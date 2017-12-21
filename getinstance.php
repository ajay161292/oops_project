<?php
Class Test{
	
	private static $instance = __CLASS__;
	public $name;

	public function __construct(){
		// return $this->name = $nameee;
		// return $this;
	}
	private function __clone()
    {
        // clone the object
    }
    public static function getInstance()
    {
        return (is_object(self::$instance)?self::$instance:(self::$instance = new self::$instance()));
    } 

    public static function setname($n){
    	echo "Full name is<br/>Ajay ".$n;
    	// return $this->name = $n;
    }


}
// $obj =new Test();
// print_r(Test::setname('parmar'));
var_dump(new Test());


?>