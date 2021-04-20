<!DOCTYPE html>
<html>
<head>
	<title>filter</title>
</head>
<body>
	<table>
		<tr>
			<td>filter name</td>
			<td>filter id</td>
		</tr>
		<?php
			foreach (filter_list() as $id => $filter) {
				echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
			}
		?>
	</table>
</body>
</html>

<?php
	$far="<h1>I am learning english.</h1>";

	$talha= filter_var($far, FILTER_SANITIZE_STRING);

	echo "$talha";

	$init = 60;

	if (filter_var($init, FILTER_VALIDATE_INT)) {
		echo "it is intiger";
	}else{
		echo "it is not intger";
	}

	$ip = "127.0.0.1";

	if (filter_var($ip, FILTER_VALIDATE_IP)) {
		echo "it is ip";
	}else{
		echo "it is not ip";
	}

	$email = "akomarfci@gmail.com";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "it is email";
	}else{
		echo "it is not email";
	}

	$url = "https://www.youtube.com/watch?v=lVIamchHi1s";

	if (filter_var($url, FILTER_VALIDATE_URL)) {
		echo "it is url";
	}else{
		echo "it is not url";
	}
?>