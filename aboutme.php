<?php session_start(); ?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>About</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" type="text/css" href="portfolio.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php include "aboutMeInfo.php";?>
<form method="post" name="aboutmedata" action="">
<hr class="hraboutMe">
<span class="buttonsAboutMe">ABOUT ME</span>
<div id="twocolumn" class="row">
  <div id="aboutimage" class="column left">
    <img id="myimage"src="pavithra.jpeg" alt="Mypic">   
    <p id="imagetext">Backend Application Developer</p>
  </div>
  <div id="aboutdetails" class="column right">
  	<div>
      <table class=tableDetails>
      	<tr class="firstRow">
          <td class="iconsaboutme"><a href="#"><i class="fa fa-user"></i></a></td>
          <td width=500;>
            <p>Name:<br><?= $name_data ?></p>
          </td>
          <td class="iconsaboutme"><a href="#"><i class="fa fa-envelope"></i></a></td>
    		  <td>
    			 <p>Email:<br><?= $email_data ?></p>
    			 
    		  </td>
    	</tr>
    	<tr class="secondRow">
        <td class="iconsaboutme"><a href="#"><i class="fa fa-volume-control-phone"></i></a></td>
    		<td>
    			<p>Phone:<br> <?= $phone_data ?></p>
    		</td>
        <td class="iconsaboutme"><a href="#"><i class="fa fa-calendar"></i></a></td>
    		<td>
    			<p>Date of BirthDay:<br><?= $dob_data ?></p>
    		</td>
    	</tr>
    	<tr class="thirdRow">
        <td class="iconsaboutme"><a href="#"><i class="fa fa-map-marker"></i></a></td>
    		<td>
    			<p>Address:<br> <?= $address_data ?></p>
    		</td>
        <td class="iconsaboutme"><a href="#"><i class="fa fa-flag"></i></a></td>
    		<td>
    			<p>Nationality:<br><?= $nationality_data ?></p>
    		</td>
    	</tr>
      </table>
      <div class="social_media">
          <p style="color: gray;">Social Profiles:</p>
          <a href="#"><i class="fab fa-facebook-f" style="color: gray;"></i></a>
          <a href="#"><i class="fab fa-twitter" style="color: gray;"></i></a>
          <a href="#"><i class="fab fa-linkedin-in" style="color: gray;"></i></a>
          <a href="#"><i class="fab fa-pinterest-square" style="color: gray;"></i></a>
          <a href="#"><i class="fab fa-google-plus-g" style="color: gray;"></i></a>
      </div>
      <div class="para" style="color: black">
         <p><?= $description_data ?> </p>
         <p><?= $sign_data ?></p>
         <img src="twke3.png" alt="signature" height="80" width="200" style="padding-top: 20px;"/>
      </div>
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
    </div>
   </div>
 </div>
</form>
</body>
</html>