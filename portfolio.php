<?php session_start(); ?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Portfolio</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>	
	<hr class="hrline">
	<span class="buttonsheader">PORTFOLIO</span>
	<div class="portfolionav">
	    <?php if(isset($_SESSION['adminSession']))
      {
        echo '<a href="adminIndex1.php">Home</a>';

      }
      else {
       
        echo '<a href="home.php">Home</a>';
      }
  
  ?>
		<a href="#">All</a>
		<a href="#">Websites</a>
		<a href="#">Apps</a>
		<a href="#">Design</a>
		<a href="#">Photography</a>
	</div>
	<div id="threecolumn" class="rowfromportfolio" >
 	 <div class="column1fromportfolio">
 	 	<img src="asgardia.PNG" alt="asgardia.png" class="imageasgardia">
 	 	<img src="1.jpg" alt="1.jpg" class="image1">
 	 	<img src="app8.PNG" alt="app8.png" class="imageapp8">
 	 	<img src="app5.PNG" alt="app5.png" class="imageapp5">
 	 </div>
 	 <div class="column1fromportfolio">
 	 	<img src="dise11.jpg" alt="dise11.jpg" class="imagedise11">
 	 	<img src="app9.PNG" alt="app9.png" class="imageapp9	">
 	 	<img src="app7.PNG" alt="app7.png" class="imageapp7">
 	 	<img src="player.PNG" alt="player.png" class="imageplayer">
 	 </div>
  	 <div class="column1fromportfolio">
  	 	<img src="16.jpg" alt="16.jpg" class="image16">
 	 	<img src="dise4.PNG" alt="dise4.png" class="imagedise4">
 	 	<img src="9.jpg" alt="9.jpg" class="image9">
 	 	<img src="dise5.PNG" alt="dise5.png" class="imagedise5">
	</div>
</body>
</html>