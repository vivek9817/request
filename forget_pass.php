<?php

include_once("core.php");

$user=$_POST["user"];
$uname=$_POST["uname"];

$rs=mysqli_query($conn,"select * from resstable where user='$user'");
if(mysqli_num_fields($rs)>0)
{
	$row=mysqli_fetch_assoc($rs);
	$pass=$row["password"];
	$_SESSION["alert"]=$pass;
	header("location:forgot.php");
}


?>