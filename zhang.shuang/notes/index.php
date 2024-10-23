<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>

<body>
	
	<?php
	echo "<div> Hello World </div>";


// Variables
	$a = 10;
	echo $a;

	$b = 2.1;
	$b = 5;

// String Interpolation
	echo "<div>I have $a dogs.</div>";

// Boolean
	$isOn = true;

// Math
	// PEMDA
	echo "<div>10 + 5 = </div>" . 10 + 5;

	echo "<div>10 + 5 * 5 = </div>" . 10 + 5 * 5;

	echo "<div>(10 + 5) * 5 = </div>" . (10 + 5) * 5;

	echo "<div>$a + $b =" . "($b+$a)</div>";

	echo "<div>$a + $b =" . ($b+$a) . "</div>";

	?>

	<hr>

	<div>My name is</div>
	<?php

	$firstname = "Jackie";
	$lastname = "Chan";

	$fullname = $firstname . " " . $lastname;
	echo $fullname;

	$fullname = "$firstname $lastname";
	echo $fullname;

	 ?>

	<hr>
	<?php
	// Superglobal
		// add ?name=BalahBalah to the end of url, the webpage will show "BalahBalah"
	echo $_GET['name'];

		// add ?type=button to the end of url, the webpage will show a button
	echo "<{$_GET['type']}> My name is {$_GET['name']}</{$_GET['type']}>";
	
	?>

	<hr>
	<?php
	// Array
	$colors = array("red","green","blue");
	echo $colors[0];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";

	echo count($colors);
	 ?>

	 <div style="color:<?= $colors[1] ?>">
	 	This text is green.
	 </div>

	 <?php

	 // Associative Array
	 $colorsAsso = [
	 	"red" => "#f00",
	 	"green" => "#0f0",
	 	"blue" => "#00f"
	 ];

	 echo $colorsAsso['green'];
	  ?>

	<?php

	// Casting, change the data type
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAsso;

	// echo $colorsObject;

	echo "<hr>";

	// Array Index Notation

	echo $colors[0]."<br>";
	echo $colorsAsso['red']."<br>";
	echo $colorsAsso[$colors[0]]."<br>";


	// Object Property Notation
	echo $colorsObject->red."<br>";

	echo $colorsObject->{$colors[0]}."<br>";

	  ?>

	  <hr>

	  <?php

	  print_r($colorsAsso);

	  echo "<hr>";

	  echo "<pre>", print_r($colorsAsso), "</pre>";

	  // Function
	  function print_p($v) {
	  	echo "<pre>",print_r($v),"</pre>";
	  }

	  print_p($_GET);

	  ?>



</body>

</html>


