<?php
	// This is the file for the parent class

class Vehicle {
	private $name;
	private $mpg;
	private $topspeed;

	public function __construct($n,$m,$s){
		$this -> name = $n;
		$this -> mpg = $m;
		$this -> topspeed = $s;
	}
	
	function __destruct(){
		echo get_class($this) . " " . $this, " exploding! <br/>";
	}
	public function characteristics(){
		echo "I am used for transportation <br/>";
	}
	public function move(){
		echo "I go <br/>";
	}
	public function __toString(){
		$ans = "I am a " .$this->name. " and I am a " .get_class($this);
		return $ans;
	}
	public function getMPGS(){
		echo "I get " . $this->mpg ." miles to the gallon and go " . $this->topspeed ." miles per hour.<br/>";
	
	}
	public function __set($property, $value){
		if(property_exists($this,$property)){
			$this-> $property = $value;
		}
	}
	
}
?>