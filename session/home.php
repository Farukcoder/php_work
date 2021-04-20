
<!DOCTYPE html>
<html>
<head>
	<title>form home</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="userp" placeholder="Your Post">
		<input type="submit" name="submitp" value="Post now">
	</form>
</body>
</html>
<?php
	session_start();
	if (isset($_POST['submitp'])) {
		$user_post = $_POST['userp'];
		$_SESSION['userp']= $user_post;
	}
	echo "<h4>posted by...." . $_SESSION['user']."</h4>";
	echo $_SESSION['userp'];
?>