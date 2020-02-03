<?php session_start(); ?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Resumes</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form method="post" name="resumeInfo" action="<?= $_SERVER['PHP_SELF']?>"> 
<hr class="hrline">
<span class="buttonsheader">RESUMES</span>  
<div class="rowvalue">
    <?php include "resumeDB.php";?>
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
</form>
</body>
</html>