<?php session_start(); ?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>HIRE ME</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="hiremephp">
<hr class="hrline">
<span class="buttonsheader">HIRE ME</span>
<div id="threecolumn" class="rowfromblog">
  <div class="column1fromblog">
  	<div><img src="car4.png" alt="cart"></div>
   	<div id="textamt" style="line-height: 50px;"><h2 style="color: gray">$300</h2></div>
   	<ul class="detaillist">
		<li>Design for Natural people</li>
		<li>Logo</li>
		<li>Advertising Image to Print</li>
		<li>Photo Editing</li>
	</ul>
    <hr class="hrhireme">
    <button class="btn"><a href="contactme.php">Contact US</a></button>
  </div>
  <div class="column1fromblog">
  	<div><img src="car5.png" alt="cart"></div>
  	<div id="textamt" style="line-height: 50px;"><h2 style="color: gray">$650</h2></div>
  	<div><ul class="detaillist">
		<li>Informative Website Design</li>
		<li>Logo</li>
		<li>Photo Editing</li>
		<li>Site Construction</li>
		<li>Maintainance for 6 months</li>
	 </ul></div>
     <hr class="hrhireme">
     <button class="btn" style="color:white"><a href="contactme.php" >Contact US</a></button>
  </div>
  <div class="column1fromblog">
  	<div><img src="car6.png" alt="cart"></div>
  	<div id="textamt" style="line-height: 50px;"><h2 style="color: gray">$1450</h2></div>
  	<div><ul class="detaillist">
		<li>3D character Design</li>
		<li>Character Sketch</li>
		<li>Digitization and development</li>
		<li>Animation</li>
		<li>Video Demo</li>
	 </ul></div>
    <hr class="hrhireme">
    <button class="btn"><a href="contactme.php">Contact US</a></button>
    
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
</body>
</html>