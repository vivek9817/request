<?php     

require_once("record.php");
if(isset($_GET['Del']))
{
	$RRID = $_GET['Del'];
	$query = "delete from rr_request where RR ID='".$RRID."'";
	$result = mysqli_query($con,$query);
	
	if($result)
	{
		header("location:view.php");
	}
	else
	{
		echo 'plese check query';
	}
}
else
{
	header("location:view.php");
}





?>