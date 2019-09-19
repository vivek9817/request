<?php
include("core.php");
/* 
var_dump($_POST);
exit; */


  $user=$_POST["user"];
  $password=$_POST["password"];
  $address=$_POST["address"];
  $phone=$_POST["phone"];

mysqli_query($conn,"INSERT INTO resstable(`user`, `password`,`address`, `mobile`) VALUES ('$user','$password','$address','$phone')");
 

	header("location: index.php"); 
	
	
if ($password != $cpassword) {
echo(" Passwords do not match");
exit;
}
 
 

?>