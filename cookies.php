<?php
// setcookie

	$cookie_name="hi";
	$cookie_value="omar faruk";
	setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

	if (!isset($_COOKIE[$cookie_name])) {
		echo "Your cookie $cookie_name is no set";
	}else{
		echo "your cookie $cookie_name is set <br>";
		echo "your cookie $cookie_name value is: $_COOKIE[$cookie_name]";
	}

	// delete cookie
	$cookie_name="user";
	setcookie($cookie_name,"",time()-3600,"/");

	if (isset($_COOKIE[$cookie_name])) {
		echo "your cookie $cookie_name is deleted ";
	}
	
?>