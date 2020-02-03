<?php session_start(); ?>
<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Skills</title>
  <link rel="stylesheet" type="text/css" href="portfolio.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>	
	<hr class="hrline">
	<span class="buttonsheader">SKILLS</span>
	<div class="straightBar" style="color: black;">
		<table class="skillstable">
			<tr>
				<td><span>MARKETABLE SKILLS</span></td>
				<td><span>TRANSFERABLE SKILLS</span></td>
			</tr>
			<tr>
				<td>
					<div align="left">
						<div class="outerProgressbar">
  							<div class="innerProgressbar" style="width:75%; background-color: #0972aa;"> <i class="fa fa-desktop"></i>Web Technology</div> 
  							<div class="value">75%</div>    
 						</div>
 					</div>
  				</td>
  				<td>
					<div align="right">
						<div class="outer_Progressbar">
  							<div class="inner_Progressbar" style="width:75%; background-color: #0972aa;"><i class="fa fa-comments"></i>communication</div> 
  							<div class="value_right">75%</div>    
 						</div>
 					</div>
 				</td>
			</tr>
			<tr>
				<td>
					<div align="left">
						<div class="outerProgressbar">
  							<div class="innerProgressbar" style="width:75%; background-color: green;"><i class="fa fa-mobile"></i>Mobile Application</div> 
  							<div class="value">75%</div>    
 						</div>
 					</div>
  				</td>
  				<td>
					<div align="right">
						<div class="outer_Progressbar">
  							<div class="inner_Progressbar" style="width:80%; background-color: green"><i class="fa fa-users"></i>Team Work</div> 
  							<div class="value_right">80%</div>    
 						</div>
 					</div>
 				</td>
			</tr>
			<tr>
				<td>
					<div align="left">
						<div class="outerProgressbar">
  							<div class="innerProgressbar" style="width:80%; background-color: dodgerblue "><i class="fa fa-camera"></i>Photography</div> 
  							<div class="value">80%</div>    
 						</div>
 					</div>
  				</td>
  				<td>
					<div align="right">
						<div class="outer_Progressbar">
  							<div class="inner_Progressbar" style="width:97%; background-color: dodgerblue"><i class="fa fa-trophy"></i>Leadership</div> 
  							<div class="value_right">97%</div>    
 						</div>
 					</div>
 				</td>
			</tr>
			<tr>
				<td>
					<div align="left">
						<div class="outerProgressbar5">
  							<div class="innerProgressbar5" style="width:97%; background-color: orange"><i class="fa fa-server"></i>Server Administration</div>
  							<div class="value">97%</div>    
 						</div>
 					</div>
  				</td>
  				<td>
					<div align="right">
						<div class="outer_Progressbar5">
  							<div class="inner_Progressbar5" style="width:70%; background-color: orange"><i class="fa fa-clock-o"></i>Time Management</div> 
  							<div class="value_right">70%</div>    
 						</div>
 					</div>
 				</td>
			</tr>
		</table>
	</div>
	<div class="circular"style="margin-top: 20px;">
		<p><span style="color: gray; margin-left: 40%;">LANGUAGE SKILLS & KNOWLEDGE</span></p>
		<table style="margin-left: 35%; margin-top: 20px;">
		<tr>
			<td>
			<div id="languageskills">
			<div class="languageProgressBar">
          	<div class="item">
                <div class="c100 p95 green">
                <span>95%</span>
                    <div class="round">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                    </div>
                  </div>
                  <div id="language">Tamil</div>
                </div></td>
                <td>
                <div class="languageProgressBar">
              	<div class="item">
                <div class="c100 p85 green">
                      <span>90%</span>
                      <div class="round">
                          <div class="bar"></div>
                          <div class="fill"></div>
                      </div>
                </div>
              </div>
            </div> 
            <div id="language">English</div>
            </td> 
          </div>
          </tr>
          </table>
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
</body>
</html>