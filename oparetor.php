<?php

echo"Arithmetic oparetor";
echo "<br>";
	echo"//addition";
	echo "<br>";
	
	$talha=10;
	$nasir=15;

	echo $talha+$nasir;
	echo "<br>";

	echo"//subtraction";
	echo "<br>";

	$talha=10;
	$nasir=15;

	echo $nasir-$talha;
	echo "<br>";

	echo "//Multiplication";
	echo "<br>";

	$talha=10;
	$nasir=15;

	echo $nasir*$talha;
	echo "<br>";

	echo"//4.Division";
	echo "<br>";

	$talha=10;
	$nasir=15;

	echo $nasir/$talha;
	echo "<br>";

	echo"//5. Modulus";
	echo "<br>";

	$talha=10;
	$nasir=15;

	echo $nasir%$talha;
	echo "<br>";

	echo"//6. Exponentiation";

	$talha=10;
	$nasir=15;

	echo $nasir**$talha;
	echo "<br>";

echo"Assignment oparetor";
echo "<br>";

// =
	$x= 20;
	echo $x;
	echo "<br>";
//addition
	$x=10;
	$x+=20;
	echo $x;
	echo "<br>";
//subtraction
	$x=20;
	$x-=10;
	echo $x;
	echo "<br>";
//Multiplication
	$x=20;
	$x*=10;
	echo $x;
	echo "<br>";
//Division
	$x=20;
	$x/=10;
	echo $x;
	echo "<br>";
//Modulus
	$x=20;
	$x%=10;
	echo $x;
	echo "<br>";
//Exponentiation
	$x=20;
	$x**=10;
	echo $x;
	echo "<br>";

echo"comparison oparetor";
echo "<br>";
	$a=10;
	$b=10;
	var_dump($a == $b);

	echo "<br>";
	$a=10;
	$b="10";
	var_dump($a === $b);

	echo "<br>";
	$a=10;
	$b=10;
	var_dump($a === $b);

	echo "<br>";
	$a=10;
	$b=20;
	var_dump($a != $b);

	echo "<br>";
	$a=10;
	$b=20;
	var_dump($a <> $b);

	echo "<br>";
	$a=10;
	$b=20;
	var_dump($a !== $b);

	echo "<br>";
	$a=20;
	$b=10;
	var_dump($a > $b);

	echo "<br>";
	$a=10;
	$b=20;
	var_dump($a < $b);

	echo "<br>";
	$a=20;
	$b=20;
	var_dump($a >= $b);

	echo "<br>";
	$a=20;
	$b=20;
	var_dump($a <= $b);
	echo "<br>";

	echo"Incriment/decriment oparetor";
	echo "<br>";

	echo "1. pre Incriment";
	echo "<br>";
	$x=5;
	echo ++$x;
	echo "<br>";

	echo "2. post Incriment";
	echo "<br>";
	$x=5;
	echo $x++;
	echo "<br>";

	echo "1. pre decriment";
	echo "<br>";
	$x=5;
	echo --$x;
	echo "<br>";

	echo "2. post decriment";
	echo "<br>";
	$x=5;
	echo $x--;
	echo "<br>";
	echo $x;
	echo "<br>";

	echo"logical oparetor";
	echo "<br>";

	echo "1.And";
	echo "<br>";
	$x=30;
	$y=40;

	if ($x==30 and $y==40) {
		echo $x+$y;
	}else{
		echo "wrong";
	}
	echo "<br>";
	$x=30;
	$y=40;

	if ($x==30 and $y==30) {
		echo $x+$y;
	}else{
		echo "wrong";
	}
	echo "<br>";
	echo "2.OR";
	echo "<br>";

	$x=30;
	$y=40;

	if ($x==30 or $y==50) {
		echo $x+$y;
	}else{
		echo "wrong";
	}
	echo "<br>";

	$x=30;
	$y=40;

	if ($x==20 or $y==50) {
		echo $x+$y;
	}else{
		echo "wrong";
	}
	echo "<br>";

	echo "2.XOR";
	echo "<br>";

	$x=30;
	$y=40;

	if ($x==30 xor $y==50) {
		echo $x+$y;
	}else{
		echo "wrong";
	}
	echo "<br>";

	$x=30;
	$y=40;

	if ($x==30 xor $y==40) {
		echo $x+$y;
	}else{
		echo "wrong";
	}
	echo "<br>";
	//provlem solving
	$x=4;
	$x *=1;
	echo "4"."*"."1"."=".$x;
	echo "<br>";
	$x=4;
	$x *=2;
	echo "4"."*"."2"."=".$x;
	echo "<br>";
	$x=4;
	$x *=3;
	echo "4"."*"."3"."=".$x;
	echo "<br>";
	$x=4;
	$x *=4;
	echo "4"."*"."4"."=".$x;
	echo "<br>";
	$x=4;
	$x *=5;
	echo "4"."*"."5"."=".$x;
	echo "<br>";
	$x=4;
	$x *=6;
	echo "4"."*"."6"."=".$x;
	echo "<br>";
	$x=4;
	$x *=7;
	echo "4"."*"."7"."=".$x;
	echo "<br>";
	$x=4;
	$x *=8;
	echo "4"."*"."8"."=".$x;
	echo "<br>";
	$x=4;
	$x *=9;
	echo "4"."*"."9"."=".$x;
	echo "<br>";
	$x=4;
	$x *=10;
	echo "4"."*"."10"."=".$x;
	echo "<br>";
	//string oparetor

	//concatination
	$x="hi";
	$y=" hlw";
	$z= $x.$y;
	echo $z;
	echo "<br>";
	//concatination assigenment oparetor
	$x="hi";
	$y=" hlw";
	$x .=$y;
	echo $x;
	echo "<br>";
//array oparetor
	$x=array(
		'a' =>'feni', 
		'b' =>'cittagong'
	);
	$y=array(
		'c' =>'cumilla', 
		'd' =>'dhaka'
	);

	var_dump($x+$y);
	echo "<br>";
//equel oparetor
	$x=array(
		'a' =>'feni', 
		'b' =>'cittagong'
	);
	$y=array(
		'c' =>'cumilla', 
		'd' =>'dhaka'
	);

	var_dump($x==$y);
	//identy oparetor
	$x=array(
		'a' =>'feni', 
		'b' =>'cittagong'
	);
	$y=array(
		'a' =>'feni', 
		'b' =>'cittagong'
	);

	var_dump($x==$y);
//inequlity
	$x=array(
		'a' =>'feni', 
		'b' =>'cittagong'
	);
	$y=array(
		'c' =>'cumilla', 
		'd' =>'dhaka'
	);

	var_dump($x!=$y);
	//inequlity
	$x=array(
		'a' =>'feni', 
		'b' =>'cittagong'
	);
	$y=array(
		'c' =>'cumilla', 
		'd' =>'dhaka'
	);

	var_dump($x<>$y);
	//Non-identity
	$x=array(
		'a' =>'feni', 
		'b' =>'cittagong'
	);
	$y=array(
		'a' =>'feni', 
		'b' =>'cittagong'
	);

	var_dump($x!==$y);
?>
