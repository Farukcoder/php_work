<?php
// <---------------GLOBALS----------------->

// $x=10;
// $y=15;

// function sum(){
// 	global $x,$y;
// 	echo $x+$y;
// }
// sum();


// $x=10;
// $y=15;

// function sum(){
// 	$GLOBALS['z']= $GLOBALS['x']+$GLOBALS['y'];
// }
// sum();
// echo "$z";

// <------------------$_SERVER-------------------->

// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SERVER_ADDR'];
// echo "<br>";
// echo $_SERVER['GATEWAY_INTERFACE'];
// echo "<br>";
// echo $_SERVER['SERVER_SOFTWARE'];
// echo "<br>";
// echo $_SERVER['SERVER_PROTOCOL'];
// echo "<br>";
// echo $_SERVER['REQUEST_METHOD'];
// echo "<br>";
// echo $_SERVER['REQUEST_TIME'];
// echo "<br>";
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>super global variable $_REQUEST</title>
	<style type="text/css">
		body{
			text-align: center;
			margin-top: 100px
		}
	</style>
</head>
<body>

	<form action="" method="POST" ;>
		user name: <input type="text" name="username">
		<input type="submit" value="submit">
	</form>
</body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD']== "POST") {
		$name = $_REQUEST['username'];
		if (empty($name)) {
			echo "<span style='color:red'>filed is empty!!</span>";
		}else{
			echo "<span style='color:green'>Successfully name ".$name."</span>";
		}
	}
?> -->

<!DOCTYPE html>
<html>
<head>
	<title>super global variable $_REQUEST</title>
	<style type="text/css">
		body{
			text-align: center;
			margin-top: 100px
		}
	</style>
</head>
<body>

	<form action="" method="POST" ;>
		user name: <input type="text" name="username">
		<input type="submit" value="submit">
	</form>
</body>
</html>

<?php
	if ($_SERVER['REQUEST_METHOD']== "POST") {
		$name = $_POST['username'];
		if (empty($name)) {
			echo "<span style='color:red'>filed is empty!!</span>";
		}else{
			echo "<span style='color:green'>Successfully name ".$name."</span>";
		}
	}
?>