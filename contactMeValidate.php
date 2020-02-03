<?php
	require('dbConnect.php'); 
    $name = $email = $phone = $message = " ";
    $nameError = $emailError = $phoneError = $messageError = " ";
	if(isset($_POST['sendMessage']))
	{
		$name = $_POST['getname'];
	    $email = $_POST['mailid'];
	    $phone = $_POST['phonenumber'];
	    $message= $_POST['message'];
		    
		    
	    //Validate Name
	    if (empty($name)) {
	       	$nameError = "* Name is required";
        }
  	    else {
  	        $name_data = test_input($_POST["getname"]);
  	        if(!preg_match("/^[a-zA-Z]*$/", $name_data)) {
   	            $nameError ="Name : Enter only alphabets";
        	}
		}
		    
		//Validate email
	    if(empty($email)) {
		    $emailError = "* Email is required";
	     }	
	     else {
		    $email_data = test_input($_POST["mailid"]);
		    if(!preg_match("/^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/", $email_data)) {
	   		    $emailError ="Email : Follow pattern xxx@yyy.com";
            }
        }
            
        //Validate phone
	    if(empty($phone)) {
		    $phoneError = "* Phone number is required";
	    }	
	    else {
		    $phone_data = test_input($_POST["phonenumber"]);
		    if(!preg_match("/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/", $phone_data)) {
	            $phoneError="Type a valid phone number";
		    }       
  	    }


	    //Validate input message
	    if(empty($message)) {
		        $messageError = "Message field required";
	    }
	    else {
		    $message_data = test_input($_POST["message"]);
		    if (!preg_match("/^.{5,}$/",$message_data)) {
                $messageError = "Meassage should be atleast of 5 characters";
            }
	    }
            
        if($nameError == ' ' || $emailError == ' ' || $phoneError == ' ' || $messageError == ' ') {
            
        
		    $sql_Query = "INSERT into contact_me VALUES('$name_data', '$email_data', '$phone_data', '$message_data')";
		    if($connection->query($sql_Query)){
		        
		        $mail = mail($email_data, $phone_data, $message_data);
		        if($mail) {
				    $display = "Email has been sent to".$email_data."We will get back to u soon";
				    mysqli_close($connection);
			    }
		       	else {
				     $display = "Email not sent. Please try again later";
				     mysqli_close($connection);
				        
		       	}
		    }
		    else {
			    die("Connection failed!".mysqli_connect_error());
		    }
        }
        else {
           echo "correct Errors";
        }
        
        function test_input($data) {
 	        $data = trim($data);
  		    $data = stripslashes($data);
  		    $data = htmlspecialchars($data);
  		    return $data;
  	    }
  	        
	}
?>