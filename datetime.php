<?php
//current date
	// echo date("d.m.Y")."<br>";
	// echo date("l")."<br>";
//current time
	// date_default_timezone_set('Asia/Dhaka');
	// echo date("H:i:m");

	// $d= mktime(11,14,54,8,12,2014);
	// echo date("Y-m-d h:i:s a l",$d);

	$d=strtotime("tomorrow");
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>