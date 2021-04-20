<?php
//index array
	// $car = array("volvo","BMW","Toyota");
	// $langth = count($car);

	// for ($i=0; $i <$langth ; $i++) { 
	// 	echo $car[$i]."<br>";
	// }
//associative array
	// $age = array(
	// 	'talha' => '10', 
	// 	'noman' => '15', 
	// 	'arman' => '20',
	// 	'riaz' => '20',
	// );

	// foreach ($age as $key => $value) {
	// 	echo "key= " . $key . " value=" . $value . "</br>";
	// }
//multidaimational array
	// $car=array(
	// 	array('volvo','100','90'), 
	// 	array('bmw','40','30'), 
	// 	array('toyota','120','110'), 
	// );
	// echo $car [1][2];

//array_change_key_case

	// $name = array(
	// 	'talha' =>35, 
	// 	'noman' =>25, 
	// 	'arman' =>20, 
	// );
	// print("<pre>");
	// print_r(array_change_key_case($name, CASE_UPPER));
	// print ("</pre>");

//array_column
	$name= array(
	 	array(

	 		'id' =>'100', 
	 		'first_name' =>'talha', 
	 		'last_name' =>'rahman'
	 	),
	 	array(

	 		'id' =>'101', 
	 		'first_name' =>'arman', 
	 		'last_name' =>'alif'
	 	),
	 	array(

	 		'id' =>'102', 
	 		'first_name' =>'abdullah', 
	 		'last_name' =>'noman'
	 	),
	 	array(

	 		'id' =>'103', 
	 		'first_name' =>'nasir', 
	 		'last_name' =>'uddin'
	 	)
	 	
	);

	$last_name= array_column($name, 'last_name','id');
	

	print('<pre>');
	print_r($last_name);
	print('</pre>');
?>