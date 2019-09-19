<?php
session_start();
$mysqli=new mysqli('localhost','root','','demo') or die($mysqli_error($mysqli));

$id=0;
$update=false;
$name='';
$location='';


if(isset($_POST['save']))
{
	$name=$_POST['name'];
	$location=$_POST['location'];
	
mysqli_query($mysqli,"INSERT INTO rtable (name,location) VALUES('$name','$location')")or die($mysqli->error);

	$_SESSION['message']="Record has been saved!";
	$_SESSION['msg_type']="success";
	
	header("location:table.php");
	
	
}


if(isset($_GET['delete']))
{
	$id=$_GET['delete'];
	mysqli_query($mysqli,"DELETE FROM rtable WHERE id=$id") or die($mysqli->error());
	
	$_SESSION['message']="Record has been deleted!";
	$_SESSION['msg_type']="danger";
	
	header("location:table.php");
}

if(isset($_GET['edit']))
{
	$id=$_GET['edit'];
	$update=true;
	$result=$mysqli->query("SELECT * FROM rtable WHERE id=$id") or die ($mysqli->error());
	if(!count($result) == 1)
	{
		$row = $result->fetch_array();
		$name = $row['name'];
		$location = $row['location'];
	}
}
	
	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$location = $_POST['location'];
		$mysqli->query("UPDATE rtable SET name='$name',location='$location' WHERE id=$id") or die($mysqli->error);
		$_SESSION['message']="Record has been updated!";
		$_SESSION['msg_type']="warning";
		
		header('location:table.php');
	}
		
	
	
	
	
	
	
	
?>

