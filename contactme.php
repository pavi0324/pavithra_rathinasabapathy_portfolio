<?php session_start(); ?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CONTACT ME</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php include "contactsInfo.php";?>

<hr class="hrline">
<span class="buttonsheader">CONTACT ME</span>
<div class="rowcontactme">
    <form method="post" name="mycontacts" action="">
	<div class="columncontactme">
		<h2>CONTACT ADDRESS</h2>
		 <div class="font_icons">
		 	<table class=tableContact>
		 		<tr>
		 			<td><a href="#"><i class="fas fa-map-marker-alt"></i></a></td>
		 			<td class="personalDetail"><strong>Address: </strong><?= $address ?></td>
		 		</tr>
		 		<tr>
		 			<td><a href="#"><i class="fas fa-phone-alt"></i></a></td>
		 			<td class="personalDetail"><strong>Phone:</strong><?= $phone ?></td>
		 		</tr>
		 		<tr>
		 			<td><a href="#"><i class="fab fa-whatsapp"></i></a></td>
		 			<td class="personalDetail"><strong>Whatsapp:</strong><?= $whatsapp ?></td>
		 		</tr>
		 		<tr>
		 			<td><a href="#"><i class="fab fa-skype"></i></a></td>
		 			<td class="personalDetail"><strong>Skype:</strong><?= $skype ?></td>
		 		</tr>
		 		<tr>
		 			<td><a href="#"><i class="fas fa-envelope-square"></i></a></td>
		 			<td class="personalDetail"><strong>Email: </strong> <?= $email ?></td>
		 		</tr>
		 		<tr>
		 			<td><a href="#"><i class="fas fa-home"></i></a></td>
		 			<td class="personalDetail"><strong>Website:</strong> <?= $website ?></td>
		 		</tr>
		 	</table>
   	    </div>
   	    <div class="social_media">
    			<a href="#"><i class="fab fa-facebook-f"></i></a>
    			<a href="#"><i class="fab fa-twitter"></i></a>
    			<a href="#"><i class="fab fa-linkedin-in"></i></a>
    			<a href="#"><i class="fab fa-pinterest-square"></i></a>
    			<a href="#"><i class="fab fa-google-plus-g"></i></a>
		</div>
	</div>
	</form>
	
	
	<div class="columncontactme1">
		<form name="contctmeform" action="<?= $_SERVER['PHP_SELF']?>" method="post">
		<h2>LET'S HAVE FUN</h2>		
		<table class="letsHaveFun">
			<tr>
				<td><input type="text" id="getname" name="getname" placeholder="Your Name" required></td>
			</tr>
			<tr>
				<td><input type="text" id="mailid" name="mailid" placeholder="Email" required></td>
			</tr>	
			<tr>
				<td><input type="number" id="phonenumber"name="phonenumber" placeholder="Phone" required></td>
			</tr>	
		</table>
		<div class="textarea">
			<textarea id="message" name="message" placeholder="Your Message.." required></textarea>
		</div>
		<button class="btn" id="msgqueryvalue" name="msgqueryvalue" onclick="return validateContact()">Send Now</button>
        
        <?php
        	require('dbConnect.php'); 
            $name = $email = $phone = $message = " ";
            $nameError = $emailError = $phoneError = $messageError = " ";
            $count =0;
            
	        if(isset($_POST['msgqueryvalue']))
	        {
		        $name = $_POST['getname'];
	            $email = $_POST['mailid'];
	            $phone = $_POST['phonenumber'];
	            $message= $_POST['message'];
	            
	            //Validate Name
	            if (empty($name)) {
	       	        $nameError = "* Name is required";
	       	        echo "name empty";
	       	        $count++;
                }
  	            else {
              		if(!preg_match("/^[a-zA-Z]*$/", $name)) {
               			$name_error="Name : Enter only alphabets";
               			echo "name is wrong";
               			$count++;
              		}
                }
                
                //Validate email
	            if(empty($email)) {
		            $emailError = "* Email is required";
		            echo "* Email is required";
		            $count++;
	            }	
	             else {
		            if(!preg_match("/^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/", $email)) {
	   		            $emailError ="Email : Follow pattern xxx@yyy.com";
	   		            echo "Email : Follow pattern xxx@yyy.com";
	   		            $count++;
                    }
                }
                
                //Validate phone
	            if(empty($phone)) {
		            $phoneError = "* Phone number is required";
		            echo "* Phone number is required";
		            $count++;
	            }	
	            else {
		            if(!preg_match("/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/", $phone)) {
	                    $phoneError="Type a valid phone number";
	                    echo "Type a valid phone number";
	                    $count++;
		            }       
  	            }
  	            
  	            
  	            //Validate input message
	            if(empty($message)) {
		            $messageError = "Type a valid phone number";
		            echo "Type a valid phone number";
		            $count++;
	            }
	            else {
		            if (!preg_match("/^.{5,}$/",$message)) {
                        $messageError = "Meassage should be atleast of 5 characters";
                        echo "Meassage should be atleast of 5 characters";
                        $count++;
                    }
	            }
	            
	           
                
                if ( $count == 0) {
                
                    $sql_Query = "INSERT into contact_me VALUES('$name', '$email', '$phone', '$message')";
        		    if($connection->query($sql_Query)){
        		        
        		        $mailidtosend = "pavi.rathina@gmail.com";
        		        $mail = mail($mailidtosend,"Regarding Your Resume", $message);
        		        if($mail) {
        				    echo "Email has been sent to ".$mailidtosend." We will get back to u soon";
        				    mysqli_close($connection);
        			    }
        		       	else {
        				     echo "Email not sent. Please try again later";
        				     mysqli_close($connection);
        				        
        		       	}
        		    }
        		    else {
        			    die("Connection failed!".mysqli_connect_error());
        		    }
        		        
                }
                else {
                    echo "Please Enter correct details and send";
                }
          	         
          	   function funcTest($data) {
 	            	$data = trim($data);
              		$data = stripslashes($data);
              		$data = htmlspecialchars($data);
              		return $data;
              	}
          	        
        	}
        ?>
        </form>
		
  </div>
</div> 
<script type="text/javascript">
	function validateContact(){
		var username = document.forms["contctmeform"]["yourname"].value;
		var email = document.forms["contctmeform"]["email"].value;
		var phone = document.forms["contctmeform"]["phone"].value;
		var msg = document.forms["contctmeform"]["msg"].value;
		var letters = /^[A-Za-z]+$/; //Name validation
		var emailData = /^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/; //email validation
		var phoneNumberPattern = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/; //phone number

		//First Name and Last Name Validation
	  	if (username.length == 0) {
	  		window.alert("Name must be filled out");
	  		username.focus();
	   		return false;
	  	}
	  	else if (!username.match(letters)){
	    	window.alert("Name must be in Alphabetic characters");
	    	username.focus();
	   		return false; 
	  	}

	  	//Validate Email ID
	  	if(email.length == 0){
	    	window.alert("Email must be filled out");
	    	email.focus();
	        return false;
	  	}
	  	else if(!email.match(emailData)) {
	    	window.alert("Invalid. Recommended format : xxx@yyy.zzz");
	    	email.focus();
	    	return false;
	  	}

	  	if(phone.length == 0){
	    	window.alert("Email must be filled out");
	    	phone.focus();
	        return false;
	  	}
	  	else if(!phone.match(phoneNumberPattern)) {
	    	window.alert("Invalid Phone number");
	    	phone.focus();
	    	return false;
	  	}

	  	if(msg.length == 0){
	  		window.alert("Your Message must be filled out");
	    	msg.focus();
	        return false;
	  	}
	  			
}
</script>
<?php if(isset($_SESSION['adminSession']))
      {
        echo '<div class="arrowineverypage">';
        echo '<a href="adminIndex1.php"><i class="fa fa-arrow-up"></i></a>';
        echo '</div>';
      }
      else {
        echo '<div class="arrowineverypage">';
        echo '<a href="home.php"><i class="fa fa-arrow-up"></i></a>';
        echo '</div>';
      }
  
  ?>
</body>
</html>