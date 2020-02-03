<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="portfolio.css">
</head>
<body>
<hr class="hraboutMe">
<span class="buttonsAboutMe">EDIT CONTACTS</span>
<div class="wrapper">
<form class="" name="editprofile" action="" method="post">	
	<div class="container">
		<label id="address">Address:</label><br>
		<input type="text" name="addr" id="addr"><br>
		<label id="LabelEmail">Phone:</label><br>
		<input type="number" name="phone" id="phone"><br>
		<label id="Labelphone">Whatsapp:</label><br>
		<input type="number" name="watsapp" id="watsapp"><br>
		<label id="Skype">Skype:</label><br>
		<input type="text" name="skype" id="skype"><br>
		<label id="LabelEmail">Email:</label><br>
		<input type="email" name="email" id="email"><br>
		<label id="website">Website:</label><br>
		<input type="text" name="site" id="site"><br>
		<button class="btn" id="updatecontact" name="updatecontact">Update</button>
	</div>
	<?php
		require('dbConnect.php');
        $sql = "SELECT * FROM mycontacts";
        $resultSet = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_assoc($resultSet))
        {
            $address_data = $row['address'];
            $phone_data = $row['phone'];
            $whatsapp_data = $row['whatsapp'];
            $skype_data = $row['skype'];
            $email_data = $row['email'];
            $website_data = $row['website'];    
        }
		$address_new = $phone_new = $whatsapp_new = $skype_new = $email_new = $website_new = ' ';

		if(isset($_POST['updatecontact'])) {

			$address = $_POST['addr'];
			$phone = $_POST['phone'];
			$watsapp = $_POST['watsapp'];
			$skype = $_POST['skype'];
			$mail = $_POST['email'];
			$website = $_POST['site'];


            //address update
			if($address){
			    
			    $address_new = $address;
			}
			else
			{
			    $address_new = $address_data;
			}
			
			//email update
			if($mail){
			    $email_new = $mail;
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
			
			//watsapp update
			if($watsapp){
			    $whatsapp_new = $watsapp ;
			}
			else
			{
			    $whatsapp_new = $whatsapp_data;
			}
			
			//skype update
			if($skype){
			    $skype_new = $skype ;
			}
			else
			{
			    $skype_new = $skype_data;
			}
			
			//skype update
			if($website){
			    $website_new = $website ;
			}
			else
			{
			    $website_new = $website_data;
			}
			
			if(($address_new != " ") ||
			   ($email_new != " ") ||
			   ($phone_new != " ") ||
			   ($website_new != " ") ||
			   ($skype_new != " ")||
			   ($whatsapp_new != ""))
			{
			    
			   $delQuery = "DELETE FROM `mycontacts`";
			   if($connection->query($delQuery)){
			       
			         $sqlQuery = "INSERT INTO `mycontacts`(`address`, `phone`, `whatsapp`, `skype`, `email`, `website`) VALUES ('$address_new','$phone_new','$whatsapp_new',
			         '$skype_new', '$email_new', '$website_new')";
			                 
			         $resultSet = mysqli_query($connection,$sqlQuery);
			                
    			   if($resultSet){  
			          echo "<script>if(confirm('Conatact details updated')){document.location.href='editprofile.php'};</script>";
                      mysqli_close($connection);
			      }
			      else {
			          echo "<script>if(confirm('Error updating Details. Try again later')){document.location.href='editcontacts.php'};</script>";
                      mysqli_close($connection);
			      }
			     
			   }
			   else {
			       echo "<script>if(confirm('Error updating Details. Try again later')){document.location.href='editcontacts.php'};</script>";
                   mysqli_close($connection);
			   }
			}
		}

	?>
</form>
</div>
</body>
</html>