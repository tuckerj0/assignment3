<?php 
	// this file will extend ParentClass.php

	class Boat extends Vehicle {
		
		public function __construct($n, $m, $s){
			parent::__construct($n,$m,$s);
		}
		public function __destruct(){
			echo get_class() . " " . $this . " sinking! <br/>";
		}
		public function characteristics(){
			parent::characteristics();
			echo "I float <br/>";
		}
		public function move(){
			echo "<div class = 'bd'>I sail across water <br/></div>";
		}
		
	}
?>