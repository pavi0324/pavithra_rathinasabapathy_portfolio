<?
require('dbConnect.php');
$sql = "SELECT * FROM about_me";
$resultSet = mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($resultSet))
{
    $name_data = $row['Name'];
    $email_data = $row['email'];
    $phone_data = $row['phone'];
    $dob_data = $row['dob'];
    $address_data = $row['address'];
    $nationality_data = $row['nationality'];    
    $description_data = $row['aboutmedetail'];
    $sign_data = $row['signature'];
    $role = $row['role'];
}
?>