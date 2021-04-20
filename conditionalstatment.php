<?php
//if statement
	// $x=10;
	// if ($x>5) {
	// 		echo "hi this number is geterthen 5";
	// 	}

	//if else
	
	// $x=10;
	// if ($x>11) {
	// 		echo "hi this number is geterthen 5";
	// 	}
	// 	else{
	// 		echo "wrong";
	// 	}

	//elseif
		// $x=10;

		// if ($x>15) {
		// 	echo "x is geterthen 15";
		// } elseif($x>12) {
		// 	echo "x is geterthen 12";
		// }elseif($x>10) {
		// 	echo "x is geterthen 10";
		// }elseif($x>11) {
		// 	echo "x is geterthen 9";
		// }else{
		// 	echo "please give a value smaller then 10";
		// }
//example:1
		// $age=14;

		// if ($age>=18 && $age<=60) {
		// 	echo "You age fine play game";
		// } else {
		// 	echo "sorry you are not match";
		// }
//example:2
		// $day="saterday";
		// if ($day=="friday") {
		// 	echo "Have a nice weekend";
		// }
		// else{
		// 	echo "Have a nice day";
		// }
//Nested if
		
		// if (a>b) 
		// {
		// 	if (a>c) 
		// 	{
		// 		echo "Max is a";
		// 	}else{
		// 		echo "Max is c";
		// 	}	
		// } else {
		// 	if (b>c) {
		// 		echo "Max is b";
		// 	}
		// 	else{
		// 		echo "Max is c";
		// 	}
		// }

// 3ti digite er vitor big digite

	// $num1=20;
	// $num2=10;
	// $num3=40;

	// if ($num1>$num2) {

	// 		if ($num1>$num3) {
	// 			echo "Max is= ".$num1;
	// 		}else{
	// 			echo "Max is= ".$num3;
	// 		}
	// 	}else{ 

	// 		if ($num2>$num3) {
	// 			echo "Max is= ".$num2;
	// 		}else{
	// 			echo "Max is= ".$num3;
	// 		}
	// 	}	
//elseif/nested elseif
		// if (condition) {
		// 	statement1;
		// }
		// elseif (condition) {
		// 	statement2;
		// }else{
		// 	statement3;
		// }
		// $zoon1=15;
		// if ($zoon1>=30) {
		// 	echo "This is red zoon";
		// }
		// elseif ($zoon1>=10) {
		// 	echo "this is youllow zoon";
		// }
		// else{
		// 	echo "This is green zoon";
		// }
//nested elseif
		// if (condition) {
		// 	statement1;
		// }
		// elseif (condition) {
		// 		statement2;
		// 	}
		// elseif (condition) {
		// 		statement3;
		// 	}
		//else{
		// statement4;
		// }
// $mark=55;

// if ($mark>=80 && $mark<=100) {
// 	echo "A+";
// }
// elseif ($mark>=79) {
// 	echo "A";
// }
// elseif ($mark>=69) {
// 	echo "A-";
// }
// elseif ($mark>=59) {
// 	echo "B";
// }
// elseif ($mark>=49) {
// 	echo "C";
// }
// elseif ($mark>=33) {
// 	echo "D";
// }
// else{
// 	echo "Fail";
// }

//switch steatment

// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

// $coding="JAVA";

// switch ($coding) {
// 	case 'html':
// 		echo "I love Html";
// 		break;

// 		case 'css':
// 		echo "I love css";
// 		break;

// 		case 'bootstrap':
// 		echo "I love bootstrap";
// 		break;

// 		case 'JAVA':
// 		echo "I love java";
// 		break;

	
// 	default:
// 		echo "sorry don't match";
// 		break;
// }


// $day="sunday";

// switch ($day) {
// 	case 'saterday':
// 		echo "This is saterday";
// 		break;

// 		case 'sunday':
// 		echo "This is sunday";
// 		break;

// 		case 'monday':
// 		echo "This is monday";
// 		break;

// 		case 'tusday':
// 		echo "This is tusday";
// 		break;

// 		case 'wednesday':
// 		echo "This is wednesday";
// 		break;

// 		case 'thusday':
// 		echo "This is thusday";
// 		break;

// 		case 'friday':
// 		echo "This is friday";
// 		break;

	
// 	default:
// 		echo "sorry this is not day";
// 		break;
// }

// $a=55;
// switch ($a) {
// 	case $a>=80:
// 		echo "A+";
// 		break;
// 	case $a>=79 :
// 		echo "A";
// 		break;
// 	case $a>=69:
// 		echo "A-";
// 		break;
// 	case $a>=59:
// 		echo "B";
// 		break;
// 	case $a>=49:
// 		echo "C";
// 		break;
// 	case $a>=33:
// 		echo "D";
// 		break;
// 	case $a<php33:
// 		echo "F";
// 		break;
// 	default:
// 		echo "please try again later";
// 		break;
// }

// $a=75;
// switch($a){
//  case $a>=80:
//   echo "You have hot A+";
//  break;
//  case  $a>=70:
//   echo "You have got A";
//  break;
//  case $a>=60:
//   echo "You have got A-";
//  break;
//  case  $a>=50:
//   echo "You have got B";
//  break;
//  case  $a>=40:
//   echo "You have got C";
//  break;
//  default:
//   echo "Please try again later";
// }
// <---------------php loop---------------->
// <------------------while loop--------------->
// $x=1;
// while ($x <= 10) {
// 	echo $x;
// 	$x++;
// }

// <----------------jor sonkhar program---------------->
// $x=2;
// while ($x <= 20) {
// 	echo $x;
// 	$x+=2;
// }

// <----------------fibonakki seris----------------->
// $x=0;
// $x1=1;
// $x2=0;

// $i=1;
// while ($i<=10) {
// 	echo $x."<br>";
// 	$x=$x1+$x2;
// 	$x1=$x2;
// 	$x2=$x;
// $i++;	

// }

// <-----------------nagative value--------------------->

// $x=100;
// while ($x>0) {
// 	echo $x."<br>";
// $x--;
// }
// <--------------------do while------------------------>
	
// $x=20;

// do {
// 	echo "the number is: $x"."<br>";
// 	$x--;
// } while ( $x>0);

// $x=7;

// do {
// 	echo "the number is: $x"."<br>";
// 	$x++;
// } while ( $x<=5);
// <----------------for loop------------------->

// for ($i=0; $i <=10 ; $i++) { 
// 	echo "the number is: $i"."<br>";
// }

// for ($i=0; ; $i++) { 
// 	if ($i >=10) {
// 		break;
// 	}
// 	echo "the number is: $i";
// }

// $i=0;
// for (;;) { 
// 	if ($i >10) {
// 		break;
// 	}
// 	echo "the number is: $i"."<br>";
// 	$i++;
// }
// <---------------------empasis number---------------------->
// for ($i=2; $i <=10 ; $i+=2) { 
// 	echo $i."<br>";
// }
// <---------------------odd number---------------------->
// for ($i=1; $i <=20 ; $i+=2) { 
// 	echo $i."<br>";
// }
// <----------------fibonakki seris----------------->
// $x=0;
// $x1=1;
// $x2=0;

// for ($i=1; $i <=20 ; $i++) { 
// 	$x=$x1+$x2;
// 	$x1=$x2;
// 	$x2=$x;
// 	echo $x."<br>";
// }
// <---------------reverse digite------------------>
// for ($i=20; $i>10 ; $i--): 
// 	echo "the number is: $i"."<br>";
// endfor;

// for ($i=20; $i>0 ; $i--){
// 	echo "the number is: $i"."<br>";
// }

// <--------------------foreach loop------------------->
// $age = array('talha' => 4,'arman' => 4.1,'noman' => 8, );

// foreach ($age as $key => $value) {
// 	echo "$value $key <br>";
// }

// PHP foreach এর সাথে reference ব্যবহার করে array element গুলোও পরিবর্তন করা যায়
// $arr = array(1,2,3,4 );

// foreach ($arr as $value) {
// 	$value= $value*2;
// 	echo "$value <br>";
// }
// print_r($arr);
// unset($value);

// PHP foreach দিয়ে কি আমরা class এর সব property এবং তাদের value print 

//<------------------------ php function--------------------------------->

?>