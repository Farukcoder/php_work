<!DOCTYPE html>
<html>
<head>
	<title>Php Style</title>
</head>
<body>
	<?php
		// echo "Hi i am Php script!!";
	//phpinfo();
	// echo $_SERVER['HTTP_USER_AGENT'];

	//PHP Variable

	// $name="faruk";
	// echo $name;

	// $x="talha";
	// $y="nasir";
	// $z="noman";
	// $a="hlw";

	//php for loop

	// for ($x = ord('a'); $x <= ord('z'); $x++)
	// echo chr($x);
	 
	//PHP Fibonacci Sequence
	$x=0;
	$y=1;

	for ($i=0; $i<=100; $i++){
		$z=$x+$y;
		echo $z . '<br>';
		$x=$y;
		$y=$z;
	}

	?>
</body>
</html>