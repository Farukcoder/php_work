<?php
// <-------------user define function--------------->
// function sayhello(){
// 	echo "Hellow world";
// }
// sayhello();

//peramiter & argument

// function hi($peramiter1,$peramiter2){
// 	echo $peramiter1+$peramiter2;
// }
// $num1=3;
// $num2=4;
// hi($num1,$num2);

// function hi($peramiter1,$peramiter2){
// 	return $peramiter1+$peramiter2;
// 	echo "hlw";
// }
// $num1=3;
// $num2=4;
// echo hi($num1,$num2);

// function hi($peramiter1,$peramiter2){
// 	echo $peramiter1+$peramiter2;
// 	echo "hlw";
// }
// $num1=3;
// $num2=4;
// hi($num1,$num2);

// function hi(...$arg){
// 	$sum = $arg[0]+$arg[1];
// 	echo $sum;
// }
// hi(4,5);

// function hi(){
// 	$arg = func_get_args();
// 	$sum = $arg[0]+$arg[1];
// 	return $sum;
// }
//  echo hi(4,5);

// function hi(){
// 	$sum = func_get_arg(0)+func_get_arg(1);
// 	return $sum;
// }
// echo hi(4,5);
// <---------------------traning with live project----------------------->

// function hi($school="my school", $year="2020"){
// 	echo "$school is started $year <br>";
// }
// hi("ibn taimiya school","1977");
// hi();
// hi("feni computer institute","2003");
// hi("gozaria primary school","1987");

function sum($y,$z){
	$x=$y+$z;
	return $x;
}
echo "5+10 =".sum(5,10);

?>