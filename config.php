<?php 

$server="us-cdbr-east-03.cleardb.com";
$username="be6ef8bed45714";
$password="d34d3ae7";
$db="heroku_1c3a749bb1d3057";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>