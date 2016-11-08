<?php 
	// this file will extend ParentClass.php

	class Plane extends Vehicle {
		
		public function __construct($n, $m, $s){
			parent::__construct($n,$m,$s);
		}
		public function __destruct(){
			echo get_class() . " " . $this . "falling out of the sky! <br/>";
		}
		public function characteristics(){
			parent::characteristics();
			echo "I fly <br/>";
		}
		public function move(){
			echo "<div class = 'plane'>I fly in the sky <br/></div>";
		}
		
	}
?>