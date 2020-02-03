<?
require('dbConnect.php');
$sql = "SELECT * FROM mycontacts";
$resultSet = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($resultSet))
{
    $address = $row['address'];
    $phone = $row['phone'];
    $whatsapp = $row['whatsapp'];
    $skype = $row['skype'];
    $email = $row['email'];
    $website = $row['website'];    
}
?>