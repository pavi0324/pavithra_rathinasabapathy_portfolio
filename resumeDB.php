<?
require('dbConnect.php');
$sql = "SELECT * FROM resumes ORDER BY year DESC";
$resultSet = mysqli_query($connection,$sql);
$i = 0;
while($row = mysqli_fetch_assoc($resultSet))
{
    $company = $row['company'];
	$role = $row['role'];
	$year = $row['year'];

	if($i % 2 == 0 ){
	   	echo '<div class="alignResumeContent">';
        echo '<div align="left">';
    	echo '<div class="alignCompany">'.$company.'</div>';
    	echo '<div class="alignRole">'.$role.' </div>';
    	echo '</div>';
    	echo '</div>';
    	echo '<div class="alignResumeContent2">';
        echo '<p id="alignYear">'.$year.'<p>';
        echo '</div>';
	}
	else
	{
        echo '<div class="alignResumeContent2">';
        echo '<br><br><br><br><br>';  
        echo '<p id="alignYear">'.$year.'<p>';
        echo '</div>';
        echo '<div class="alignResumeContent3">';
        echo '<br><br><br><br>';  
        echo '<div align="left">';
    	echo '<div class="alignCompany1"> '.$company.'</div>';
    	echo '<div class="alignRole1"> '.$role.'</div>';
        echo '</div>';
        echo '</div>';
	}
	$i++;

}
?>

<!--https://stackoverflow.com/questions/31057877/get-data-from-database-and-use-loop-in-php-->