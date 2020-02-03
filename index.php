<?php session_start();
?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="portfolio.css">
</head>
<body background="image.jpg" class="homedata">
    <?php include "aboutMeInfo.php";?>
	<div class="wrapper">
	   <div class="sidebar" style="background-color:#777777">	 
	   <div><img src="logo.png" alt="logo" height="150" width="150" style="margin-left:30px; max-width: 100%;"></div> 
	   <div class="name"><h4>PAVITHRA RATHINASABAPATHY</h4></div>  	
		<ul>
			<li><a href="indexMsg.php">HOME</a></li>
			<li><a href="indexMsg.php">ABOUT</a></li>
			<li><a href="indexMsg.php">SKILLS</a></li>
			<li><a href="indexMsg.php">RESUMES</a></li>
			<li><a href="indexMsg.php">PORTFOLIO</a></li>
			<li><a href="indexMsg.php">BLOG</a></li>
			<li><a href="indexMsg.php">HIRE ME</a></li>
			<li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOG IN</a></li>
			<li><a href="#" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">SIGN UP</a></li>
		</ul>
		<div>
			<footer class="footer1">
				<p><small> &copy; DiazApps ALL RIGHTS RESERVED BY</small>
				<small><span style="color: #0000A0">PAVITHRA RATHINASABAPATHY</span></small>	
				</p>
			</footer>
		</div>		
	  </div>
	</div>
	<div class="main_content">
			<h3>HELLO I'M</h3>
			<h1>PAVITHRA RATHINASABAPTHY</h1>
			<h3><?= $role ?></h3>
			<button class="btn"> Download My CV <i class="fa fa-download"></i></button>
	</div>
	<div id="id01" class="modal">
		<form class="modal-content animate" name="loginform" action="" method="post">
			<div class="container">
				<span id="logintext">Log in</span>
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
				<p><hr class="hrlogin"></p>
				<label id="LabelUser">User:</label><br>
				<input type="text" name="username" required><br>
				<label id="LabelPassword">Password:</label><br>
				<input type="password" name="password" required><br>
				<p><hr class="hrlogin1"></p><br>
				<div class="rightbuttons">
				<button class="buttonlogin" name="proceed" id="proceed" onclick="return validateLogin()">login</button>
				<a href="#" onclick="document.getElementById('id01').style.display='none'" class="buttoncancel">Close</a> 
				<a href="#" class="buttonlogin" name="logintoproceed" id="logintoproceed">Get in</a></div>
				<!--<button class="buttonvalue" id="login" name="login">Get in</button>-->
				<?php
				require('dbConnect.php');
				$username = $password = " ";
                $count = 0;
				if(isset($_POST['proceed'])) 
                {
                    $username = test_input($_POST["username"]);
                    $password = test_input($_POST["password"]);
                    if (empty($username)) {
                    	    echo "<script>if(confirm('* Username is required')){document.location.href='home.php'};</script>";
                    		$count++;
                    }
                  	// Validate password
                	if (empty($password)) {
                	    echo "<script>if(confirm('* password is required')){document.location.href='home.php'};</script>";
                		$count++;
                  	}
                  	
                  	if($count == 0){
                        $sqlQuery = "SELECT * FROM signup where Username='$username' and password='$password'";
                         if($result = mysqli_query($connection,$sqlQuery)){
                      	        if($row = mysqli_fetch_assoc($result))
                      	        {
                          	        if($row['Admin'] == 'Yes') {
                          	            echo "<script>if(confirm('Welcome Admin')){document.location.href='adminIndex1.php'};</script>";
                          	            
                          	            $_SESSION['adminSession'] = "Y";
                        		    	mysqli_close($connection);
                          	        }
                          	        else {
                            			echo "<script>if(confirm('Thank you for logging into the website. Procced to look into my profile')){document.location.href='home.php'};</script>";
                            			mysqli_close($connection);
                          	        }
                          	    }
                      	        else {
                        		    echo "<script>if(confirm('Invalid credential. Enter correct username and password')){document.location.href='home.php'};</script>";
                        		    mysqli_close($connection);
                        		}
                    		
                         }
                    		else {
                    		    echo "<script>if(confirm('Error Logging in. Try again later ')){document.location.href='home.php'};</script>";
                    		    mysqli_close($connection);
                    		}
                         }  
                         
                  	
                  	    function test_input($data) {
                     		$data = trim($data);
                      		$data = stripslashes($data);
                      		$data = htmlspecialchars($data);
                      		return $data;
                      	}
                  	}
                
				?>
			</div>
		</form>
	</div>

	<div id="id02" class="modal">
		<form class="modal-content animate" name="signupform" action="" method="POST">
			<div class="container">
				<span id="logintext">Check in</span>
				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
				<p><hr class="hrlogin"></p>
				<label id="LabelFirstName">Name:</label><br>
				<input type="text" name="Fname" id="Fname" required><br>
				<label id="LabelLastName">Last Name:</label><br>
				<input type="text" name="lname" id="lname" required><br>
				<label id="LabelEmail">Email:</label><br>
				<input type="email" name="emailid" id="emailid" required><br>
				<label id="LabelUserName">User:</label><br>
				<input type="text" name="uname" id="uname" required><br>
				<label id="LabelPassword">Password:</label><br>
				<input type="password" name="pwd" id="pwd" required><br>
				<label id="LabelRepeat">Repeat Password:</label><br>
				<input type="password" name="repeatpwd" id="repeatpwd" required><br>
				<p><hr class="hrlogin1"></p><br>
				<div class="rightbuttons">
				<a href="#" onclick="document.getElementById('id02').style.display='none'" class="buttoncancel">Close</a>
				<button class="buttonlogin" id="signup" name="signup" onclick="return validateForm()">Submit</button>
				<!--<a href="#" class="buttonlogin" id="signupbutton" name="signupbutton">Submit</a></div>-->
			    <?php
                require('dbConnect.php');
                $fname = $lname = $email = $username = $password = $repeatpass = " ";
                
                if(isset($_POST['signup'])) 
                {
                    
                	$fname = test_input($_POST["Fname"]);
                	$lname = test_input($_POST["lname"]);
                	$email = test_input($_POST["emailid"]);
                	$username = test_input($_POST["uname"]);
                	$password = test_input($_POST["pwd"]);
                	$repeatpass = test_input($_POST["repeatpwd"]);
                	$count = 0;
                	
                	//Validate first name
                	if (empty($_POST["Fname"])) {
                	    echo "<script>if(confirm('* FirstName is required')){document.location.href='home.php'};</script>";
                		$fname_err ="* FirstName is required";
                		$count++;
                  	}
                  	else if(!preg_match("/^[a-zA-Z]*$/", $fname)) {
                  	    echo "<script>if(confirm('FirstName : Enter only alphabets')){document.location.href='home.php'};</script>";
                   		//$fname_err="FirstName : Enter only alphabets";
                   		$count++;
                  	}
                  	
                  	//Validate last name
                	if (empty($_POST["lname"])) {
                	    echo "<script>if(confirm('* LastName is required')){document.location.href='home.php'};</script>";
                		//$lname_err ="* LastName is required";
                		$count++;
                  	}
                  	else if(!preg_match("/^[a-zA-Z]*$/", $lname)) {
                  	    echo "<script>if(confirm('LastName : Enter only alphabets')){document.location.href='home.php'};</script>";
                   	//	$lname_err="LastName : Enter only alphabets";
                   		$count++;
                  	}
                  	
                  	//Validate email
                	if(empty($_POST["emailid"])) {
                	    echo "<script>if(confirm('* Email is required')){document.location.href='home.php'};</script>";
                		//$email_err = "Email is required";
                		$count++;
                	}	
                	else if(!preg_match("/^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/", $email)) {
                	    echo "<script>if(confirm('Email : Follow pattern xxx@yyy.com')){document.location.href='home.php'};</script>";
                	   // $email_err="Email : Follow pattern xxx@yyy.com";
                	    $count++;
                  	}
                
                  	// Validate username
                	if (empty($_POST["uname"])) {
                	    echo "<script>if(confirm('* Username is required')){document.location.href='home.php'};</script>";
                	//	$username_err ="* Username is required";
                		$count++;
                  	}
                  	else if(!preg_match("/^[a-z0-9_-]{0,15}$/", $username)) {
                  	 echo "<script>if(confirm('Username : Only small letters, Alphabets, underscores should be used to fill username')){document.location.href='home.php'};</script>";
                   	//	$username_err = "Username : Only letters, Alphabets, underscores should be used to fill username";
                   		$count++;
                  	}
                
                
                  	// Validate password
                	if (empty($_POST["pwd"])) {
                	    echo "<script>if(confirm('* password is required')){document.location.href='home.php'};</script>";
                	//	$password_err ="* password is required";
                		$count++;
                  	}
                  	else if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/", $password)) {
                  	    echo "<script>if(confirm('Password should contain one upper case, one lowercase, one digit and one special characters')){document.location.href='home.php'};</script>";
                   	//	$password_err = "";
                   		$count++;
                  	}
                
                  	// Validate repeat password
                	if (empty($_POST["repeatpwd"])) {
                	     echo "<script>if(confirm('* Confirm password is required')){document.location.href='home.php'};</script>";
                	//	$repeatpass_err ="* password is required";
                		$count++;
                  	}
                  	else if (!($password == $repeatpass)){
                  	    echo "<script>if(confirm('* PASSWORD MISMATCH')){document.location.href='home.php'};</script>";
                	//	$repeatpass_err ="* password error";
                		$count++;
                  	}
                
                  	if($count == 0 ) {
                		
                
                		$sql = "INSERT INTO `signup`(`FirstName`, `LastName`, `email`, `Username`, `password`, `repeatPass`) VALUES('$fname', '$lname', '$email', '$username', '$password', '$repeatpass')";
                		if(mysqli_query($connection,$sql)) {
                
                			echo "<script>if(confirm('Thank you for Signing into the website. Procced to look into my profile')){document.location.href='home.php'};</script>";
                			$admin = "y";
                          	$_SESSION['adminSession'] = $admin;
                			mysqli_close($connection);
                		}
                		else {
                			die("Connection failed!".mysqli_connect_error());
                		}
                	}
                  	
                  	
                }
                
                function test_input($data) {
                 		$data = trim($data);
                  		$data = stripslashes($data);
                  		$data = htmlspecialchars($data);
                  		return $data;
                  	}
                ?>
			</div>
		</form>
	</div>
	<script type="text/javascript">
	// Get the modal
	var modal = document.getElementById('id01');
	var modal = document.getElementById('id02');
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
    	if (event.target == modal) {
        	modal.style.display = "none";
    	}
	}

	function validateForm() {
	   	var firstName = document.forms["signupform"]["Firstname"].value;
	  	var lastName = document.forms["signupform"]["lastname"].value;
	  	var email = document.forms["signupform"]["email"].value;
	  	var username = document.forms["signupform"]["username"].value;
	  	var password = document.forms["signupform"]["password"].value;
	  	var repeatPassword = document.forms["signupform"]["repeatpassword"].value;
	  	var emailData = /^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/; //email validation
	  	var pattern= /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/; //password pattern
	  	var illegalChars = /\W/;  //username validation
	  	var letters = /^[A-Za-z]+$/; //Name validation

	   	//First Name and Last Name Validation
	  	if (firstName.length == 0) {
	  		window.alert("Name must be filled out");
	  		firstName.focus();
	   		return false;
	  	}
	  	else if (!firstName.match(letters)){
	    	window.alert("Name must be in Alphabetic characters");
	    	firstName.focus();
	   		return false; 
	  	}
	 
		if (lastName.length == 0 ) {
	    	window.alert("Last Name must be filled out");
	    	lastName.focus();
	    	return false;
	  	}
	  	else if (!lastName.match(letters)){
	    	window.alert("Name must be in Alphabetic characters");
	    	lastName.focus();
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

	  	// Validate UserName
	  	if(username.length == 0) {
	    	window.alert("Username must be filled out");
	    	username.focus();
	    	return false;
	  	}
	  	else if(username.match(illegalChars)){
	    	window.alert("Only letters, Alphabets, underscores should be used to fill username");
	    	username.focus();
	    	return false;
	 	}

	  	// Validate Password
	  	if(password.length == 0){
	    	window.alert("Password must be filled out");
	    	password.focus();
	        return false;
	  	}
	  	else if(!password.match(pattern)) {
	    	window.alert("Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
	    	password.focus();
	    	return false;
	 	}
	 	else if(repeatPassword.length==0) {
	 		window.alert("Confirm Password must be filled");
	 		password.focus();
	    	return false;
	 	}
	  	else if(!password.match(repeatPassword)) {
	    	window.alert("Password Mismatch");
	    	password.focus();
	    	return false;
	  	}
	  	return true;
}

	function validateLogin(){
		var username = document.forms["loginform"]["username"].value;
		var password = document.forms["loginform"]["password"].value;

		if (username.length == 0 || password.length == 0 ) {
	  		window.alert("Please enter both username and password");
	   		return false;
	  	}
	  	return true;
}
</script>
</body>
</html>
