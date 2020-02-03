<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="portfolio.css">
</head>
<body>
<hr class="hraboutMe">
<span class="buttonsAboutMe">EDIT ABOUT ME</span>
<div class="wrapper">
<form class="" name="editprofile" action="" method="post">	
	<div class="container">
		<label id="address">Address:</label><br>
		<input type="text" name="address" id="address"><br>
		<label id="LabelEmail">Email:</label><br>
		<input type="email" name="email" id="email"><br>
		<label id="Labelphone">Phone:</label><br>
		<input type="number" name="phone" id="phone"><br>
		<label id="Labelphone">Role:</label><br>
		<input type="text" name="role" id="role"><br>
		<div class="textarea" class="changedesc">
			<textarea id="description_data" name="description_data" placeholder="Description" maxlength="1000"></textarea>
		</div>
		<button class="btn" id="update" name="update">Update</button>
	</div>
	<?php
		require('dbConnect.php');

		$sql = "SELECT * FROM about_me";
		$resultSet = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_assoc($resultSet))
		{
		    $name_data = $row['Name'];
		    $email_data = $row['email'];
		    $phone_data = $row['phone'];
		    $dob_data = $row['dob'];
		    $address_data = $row['address'];
		    $nationality_data = $row['nationality'];    
		    $description_data = $row['aboutmedetail'];
		    $sign_data = $row['signature'] ;
		    $role_data = $row['role'];
		}
		
		$address = $phone = $email = ' ';

		if(isset($_POST['update'])) {
            
            
            $address_new =  $email_new = $phone_new = $role_new = $description_new = " ";

			$address = $_POST['address'];
			$mailid = $_POST['email'];
			$phone = $_POST['phone'];
			$role = $_POST['role'];
			$desc = $_POST['description_data'];
			
			//address update
			if($address){
			    
			    $address_new = $address;
			}
			else
			{
			    $address_new = $address_data;
			}
			
			//email update
			if($mailid){
			    $email_new = $mailid;
			}
			else
			{
			    $email_new = $email_data;
			}
			
			//phone update
			if($phone){
			    $phone_new = $phone;
			}
			else
			{
			    $phone_new = $phone_data;
			}
			
			//role update
			if($role){
			    $role_new = $role ;
			}
			else
			{
			    $role_new = $role_data;
			}
			
			//role update
			if($desc){
			    $description_new = $desc ;
			}
			else
			{
			    $description_new = $description_data;
			}
			
			if(($address_new != " ") ||
			   ($email_new != " ") ||
			   ($phone_new != " ") ||
			   ($description_new != " ") ||
			   ($description_new != " "))
			{
			    
			   $delQuery = "DELETE FROM `about_me`";
			   if($connection->query($delQuery)){
			       
			         $sqlQuery = "INSERT INTO about_me(Name, email, phone, dob, address, nationality, aboutmedetail, signature, role) VALUES 
			                 ('$name_data', '$email_new', '$phone_new', '$dob_data','$address_new', '$nationality_data','$description_new','$sign_data', '$role_new')";
			                 
			         $resultSet = mysqli_query($connection,$sqlQuery);
			                
    			   if($resultSet){  
			          echo "<script>if(confirm('About Me details updated')){document.location.href='editprofile.php'};</script>";
                      mysqli_close($connection);
			      }
			      else {
			          echo "<script>if(confirm('Error updating Details. Try again later')){document.location.href='editAboutMe.php'};</script>";
                      mysqli_close($connection);
			      }
			     
			   }
			   else {
			       echo "<script>if(confirm('Error updating Details. Try again later')){document.location.href='editAboutMe.php'};</script>";
                   mysqli_close($connection);
			   }
			}
			

		}

	?>
</form>
</div>
</body>
</html>