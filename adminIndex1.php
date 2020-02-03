<?php session_start(); ?>
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
			<li><a href="adminIndex1.php">HOME</a></li>
			<li><a href="aboutme.php">ABOUT</a></li>
			<li><a href="skills.php">SKILLS</a></li>
			<li><a href="resumes.php">RESUMES</a></li>
			<li><a href="portfolio.php">PORTFOLIO</a></li>
			<li><a href="blog.html">BLOG</a></li>
			<li><a href="HireMe.php">HIRE ME</a></li>
			<li><a href="editprofile.php">Edit Profile</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<div>
			<footer>
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
</body>
</html>
