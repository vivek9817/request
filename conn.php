<?php
include("core.php");

if(!isset($_SESSION['user'])){
	$_SESSION['user']=false;
}

$user=$_POST["user"];
$pass=$_POST["password"];

 
 $sql="select * from resstable where user='$user' and password='$pass'";
 
 $rs=mysqli_query($conn,$sql);
 $num_rows=mysqli_num_rows($rs); 
 if($num_rows>0)
 {
	 
	 
	 
	 
	$_SESSION['user']=true;
	header("location: dashboad.php"); 
 
 }
 else{
	    $_SESSION["alert"]="<br><h3 style='color:red'>Invalid Password</h3><br>";
		header("location:index.php");	
 }
 
 
 
 

?>