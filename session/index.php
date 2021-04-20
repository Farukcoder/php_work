<?php
	if (isset($_POST['submit'])) {
		$user = $_POST['user'];
		$password = $_POST['password'];

		session_start();
		$_SESSION['user']= $user;
		$_SESSION['password']= $password;

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>php session</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="user" placeholder="user name"><br>
		<input type="text" name="password" placeholder="password"><br>
		<button type="submit" name="submit">Login</button>
	</form>
</body>
</html>