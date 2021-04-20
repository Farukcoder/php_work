<?php  
	$t=date("H");
	if ($t<"12") {
		echo "good morning";
	}elseif ($t<"1") {
		echo "good afternoon";
	}elseif ($t<"7") {
		echo "good evening";
	}

?>
