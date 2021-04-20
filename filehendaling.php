<?php
	$myfile = fopen("text.txt","r") or die("not fond!");
	echo fread($myfile, filesize("text.txt"));
	fclose($myfile);
?>