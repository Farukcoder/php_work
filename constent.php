<?php
	define('EA', 'talha');

	function name(){
		echo EA;
	}
	name();

	function name(){
		return EA;
	}
	echo name();
?>