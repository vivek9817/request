<?php

require_once("record.php");

if(isset($_POST['submit']))
{
	if(empty($_POST['date']) || empty($_POST['domain']) || empty($_POST['rrtype'] || empty($_POST['region']) || empty($_POST['skilllevel']) || empty($_POST['minimumexperience']) || empty($_POST['releventexperience']) || empty($_POST['qualification']) || empty($_POST['certification']) || empty($_POST['targetdate']) || empty($_POST['companyname']) || empty($_POST['status']) || empty($_POST['priority']) || empty($_POST['requestername']) || empty($_POST['requesteremail']) || empty($_POST['requestercontact']) || empty($_POST['remark'])))
	{
		echo 'please fill in the blanks';
	}
	else
	{
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
		
		
		$query = "insert into rr_request(Date,Domain,RR Type,Region,Skill Level,Minimum Experience,Relevent Experience,Qualification,Certification,Target Date,Company Name,Status,Priority,Requester Name,Requester Email,Requester Contact,Remark) values('$Date','$Domain','$RRType','$Region','$SkillLevel','$MinimumExperience','$ReleventExperience','$Qualification','$Certification','$TargetDate','$CompanyName','$Status','$Priority','$RequesterName','$RequesterEmail','$RequesterContact','$Remark')";
		$result = mysqli_query($con,$query);
		
	if($result)
	{
		header("location:view.php");
	}
	else
	{
		echo 'plese check your query';
	}
	}
}
else
{
	header("location:nw.php");
}
?>