<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="portfolio.css">
</head>
<body>
<hr class="hraboutMe">
<span class="buttonsAboutMe">EDIT RESUME</span>
<div class="wrapper">
<form class="" name="editprofile" action="" method="post">	
	<div class="container">
		<label id="address">Company:</label><br>
		<input type="text" name="company" id="company"><br>
		<label id="LabelEmail">Role:</label><br>
		<input type="text" name="role" id="role"><br>
		<label id="Labelphone">Year:</label><br>
		<input type="text" name="year" id="year"><br>
		<button class="btn" id="updateResume" name="updateResume">Update</button>
	</div>
	<?php
		require('dbConnect.php');

		$company = $role = $year = ' ';

		if(isset($_POST['updateResume'])) {

			$company = $_POST['company'];
			$role = $_POST['role'];
			$year = $_POST['year'];

			$sqlInsert = "INSERT INTO `resumes`(`company`, `role`, `year`) VALUES ('$company','$role','$year')";
			if($connection->query($sqlInsert)){
			   
			   echo "<script>if(confirm('Resume details inserted')){document.location.href='editprofile.php'};</script>";
                      mysqli_close($connection);
			    
			    
			}
			else {
			    echo "<script>if(confirm('Eroor adding detail')){document.location.href='editprofile.php'};</script>";
                      mysqli_close($connection);
			}
		}

	?>
</form>
</div>
</body>
</html>