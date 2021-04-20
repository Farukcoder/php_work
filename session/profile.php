<h2>user profile</h2>
<hr>
<?php
	session_start();
	echo "hi" . $_SESSION['user'];
	echo " <br> your password is" . $_SESSION['password'];
	if (isset($_POST['logout'])) {
		header("location:logout.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
</head>
<body>
	<form action="" method="post">
		<input type="submit" name="logout" value="logout">
	</form>
</body>
</html>
