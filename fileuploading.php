<?php
	// if (isset($_FILES['image'])) {
	// 	$filename = $_FILES ['image'] ['name'];
	// 	$filetmp = $_FILES ['image'] ['tmp_name'];
	// 	move_uploaded_file($filetmp,"images/".$filename);
	// 	echo "file uploaded succesfully";
	// }
	if (isset($_POST['submit'])) {
		//Get info
		$fileName = $_FILES['image']['name'];
		$fileType = $_FILES['image']['type'];
		$fileTmp = $_FILES['image']['tmp_name'];
		$fileError = $_FILES['image']['error'];
		$fileSize = $_FILES['image']['size'];
		$ext      = pathinfo($fileName,PATHINFO_EXTENSION);

		//Upload

		if ($fileSize<1500000) {
			if ($ext === 'png' or $ext === 'jpg' or $ext === 'jpeg' or $ext === 'pdf' or $ext === 'zip') {
				move_uploaded_file($fileTmp,'images/'.date('d_m_Y_h_i_s').$fileName);

				echo "upload succesfully";
			}else{
				echo "please upload PNG,JPG,JPEG,PDF,ZIP file";
			}
		}else{
			echo "your file to be larg";
		}



	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>php file uploading</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>