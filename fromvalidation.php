<?php
	$nameErr=""; $emailErr=""; $websiteErr=""; $commentsErr=""; $genderErr="";$dateErr="";$mobileErr="";
	$name=""; $email=""; $website="";  $comments=""; $gender=""; $date="";$mobile="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST['name'])) {
			$nameErr="Name field is requird";
			
		}else{
			$name    =$_POST['name'];
			if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){

				$nameErr="Your name invalid";
			}
		}
		if (empty($_POST['email'])) {
			$emailErr="Email field is requird";
			
		}else{
			$email  = $_POST['email'];

			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email address";
			}
		}
		if (empty($_POST['website'])) {
			$websiteErr="";
			
		}else{
			$website =$_POST['website'];
			if (!filter_var($website,FILTER_VALIDATE_URL)) {
				$websiteErr="invalid web address";
			}
		}
		if (empty($_POST['comments'])) {
			$commentsErr="";
			
		}else{
			$comments =$_POST['comments'];
		}
		if (empty($_POST['mobile'])) {
			$mobileErr="Mobile filed is requird";
		}else{
			$mobile = $_POST['mobile'];
			if (!preg_match('/^[0-9]*$/',$mobile)){
				$mobileErr="only number is allowed";
			}
		}
		if (empty($_POST['gender'])) {
			$genderErr ="Gender field is requird";
			
		}else{
			$gender =$_POST['gender'];
		}
		if (empty($_POST['date'])) {
			$dateErr="Date field is requird";
		}else{
			$date = $_POST['date'];
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>from validation</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body >
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<table>
			<tr>
				<td>Name<span style="color: red">*</span></td>
				<td><input type="text" name="name"> <span class="error"><?= $nameErr; ?></span></td>
					
			</tr>
			<tr>
				<td>Email<span style="color: red">*</span></td>
				<td> <input type="text" name="email"> <span class="error"><?= $emailErr; ?></span></td>

			</tr>
			<tr>
				<td>Website</td>
				<td> <input type="text" name="website"><span class="error"><?= $websiteErr; ?></span></td>
			</tr>
			<tr>
				<td>Comments</td>
				<td> <textarea name="comments" rows="5" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Gender<span style="color: red">*</span></td>
				<td><input type="radio" name="gender" value="male">male
					<input type="radio" name="gender" value="female">female
					<span class="error"><?= $genderErr; ?></span>
				</td>
			</tr>
			<tr>
				<td>Mobile<span style="color: red">*</span></td>
				<td><input type="text" name="mobile"><span class="error"> <?= $mobileErr; ?></span></td>
			</tr>
			<tr>
				<td>Date</td>
				<td>
					<input type="date" name="date">
					<span class="error"><?= $dateErr; ?></span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td> <input type="submit" name="submit" value="submit"> </td>
			</tr>
		</table>
	</form>
	<?php
		echo "Your Information"."<br>";
		echo $name."<br>";
		echo $email."<br>";
		echo $website."<br>";
		echo $comments."<br>";
		echo $mobile."<br>";
		echo $date."<br>";
		echo $gender."<br>";
	?>
</body>
</html>

