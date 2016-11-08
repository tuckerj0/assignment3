<?php 
   function __autoload($class) {
	require_once $class . '.php';
   }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
<?php
	$A[] = new Vehicle("scooter", "0","5");
	$A[] = new Boat("sailboat", "12", "50");
	$A[] = new Boat("Speed Boat", "9", "65");
	$A[] = new Plane("Fighter Jet", "0.6", "550");
	
	foreach ($A as $Vehicle):
		echo "<h1>$Vehicle<br/></h1>";
		$Vehicle->characteristics();
		$Vehicle->move();
		$Vehicle->getMPGS();
	endforeach;
	
	echo "<h1>$Vehicle<br/></h1>";
	$A[0] -> characteristics();
	echo "my engine broke!<br/>";
	$A[0] -> __set("topspeed", 0);
	$A[0] -> getMPGS();
	
	echo "<h1>$A[2]<br/></h1>";
	$A[2] -> characteristics();
	echo "I got a new engine!<br/>";
	$A[2] -> __set("topspeed", 100);
	$A[2] -> getMPGS();
	
	echo "<h1>Destroying all vehichles</h1>";
	
?>	
</body>
</html>