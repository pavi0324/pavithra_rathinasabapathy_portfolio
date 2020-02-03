<?php 

$server_name="localhost";
$username="pavithra_pxr8736";
$password="Pavi@oct0310";
$dbname="pavithra_portfolio";

try {    
        $connection = mysqli_connect($server_name,$username,$password,$dbname);
        if($connection) {
        }
        
    }
    catch(Exception $exception)
    {
        echo "Connection failed: ".$exception->getMessage();
    }
?>