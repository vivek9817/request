<?php

require_once("record.php");
if(isset($_POST['update']))
{
	$RRID = $_GET['ID'];
    $Date = $_POST['date'];
	$Domain = $_POST['domain'];
	$RRType = $_POST['rrtype'];
	$Region = $_POST['region'];
	$SkillLevel = $_POST['skilllevel'];
	$MinimumExperience = $_POST['minimumexperience'];
	$ReleventExperience = $_POST['releventexperience'];
	$Qualification = $_POST['qualification'];
	$Certification = $_POST['certification'];
	$TargetDate = $_POST['targetdate'];
	$CompanyName = $_POST['companyname'];
	$Status = $_POST['status'];
	$Priority = $_POST['priority'];
	$RequesterName = $_POST['requestername'];
	$RequesterEmail = $_POST['requesteremail'];
	$RequesterContact = $_POST['requestercontact'];
	$Remark = $_POST['remark'];
		
		
		
	
	$query = "update rr_request set Date='".$Date."',Domain='".$Domain."',RR Type='".$RRType."',Region='".$Region."',Skill Level='".$SkillLevel."',Minimum Experience='".$MinimumExperience."',Relevent Experience='".$ReleventExperience."',Qualification='".$Qualification."',Certification='".$Certification."',Target Date='".$TargetDate."',Company Name='".$CompanyName."',Status='".$Status."',Priority='".$Priority."',Requester Name='".$RequesterName."',Requester Email='".$RequesterEmail."',requester Contact='".$RequesterContact."',Remark='".$Remark."' where RR ID='".$RRID."'";
	$result = mysqli_query($con,$query);
	if($result)
	{
		header("location:view.php");
	}
	else{
		echo 'plese check your query';
	}
}

else
{
	header("location:view.php");
	
	
}



?>