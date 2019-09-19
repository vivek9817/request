<?php


require_once("record.php");
$RRID = $_GET['edit'];
$query = "select * from rr_request where RR ID='".$RRID."'";
$result = mysqli_query($con,$query);







   
	$Date = '';		
	$Domain = '';
	$RRType = '';
	$Region = '';
	$SkillLevel = ''; 
	$MinimumExperience = '';
	$ReleventExperience = '';
	$Qualification = '';
	$Certification = '';
	$TargetDate = '';
	$CompanyName = '';
	$Status = '';
	$Priority = '';
	$RequesterName = '';
	$RequesterEmail = '';
	$RequesterContact = '';
	$Remark = '';
	
	
	
	
	
	

//$UserName = '';
//$UserEmail = '';
//$UserAge = '';

while($row = mysqli_fetch_assoc($result))
{
	$RRID = $row['RR ID'];
	$Date = $row['Date'];
	$Domain = $row['Domain'];
	$RRType = $row['RR Type'];
	$Region = $row['Region'];
	$SkillLevel = $row['Skill Level'];
	$MinimumExperience = $row['Minimum Experience'];
	$ReleventExperience = $row['Relevent Experience'];
	$Qualification = $row['Qualification'];
	$Certification = $row['Certification'];
	$TargetDate = $row['Target Date'];
	$CompanyName = $row['Company Name'];
	$Status = $row['Status'];
	$Priority = $row['Priority'];
	$RequesterName = $row['Requester Name'];
	$RequesterEmail = $row['RequesterEmail'];
	$RequesterContact = $row['Requester Contact'];
	$Remark = $row['Remark'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-UA-compatible" content="ie=edge">
  <title> basic table</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
			<link   rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
				<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  

 
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col m-auto">
			<div class="card mt-5">
				<div class="card-title">
					<h3 class="bg-success text-white text-center py-3">Update RR TABLE </h3>
				</div>
				<div class="card-body">
					<form action="update.php?ID=<?php echo $RRID ?>" method="post">
						<input type="text" class="form-control mb-4" placeholder="Date" name="date" value="<?php echo $Date; ?>">
						<input type="text" class="form-control mb-4" placeholder="Domain" name="domain" value="<?php echo $Domain; ?>">
						<input type="text" class="form-control mb-4" placeholder="RR type" name="rrtype" value="<?php echo $RRType; ?>">
						<input type="text" class="form-control mb-4" placeholder="Region" name="region" value="<?php echo $Region; ?>">
						<input type="text" class="form-control mb-4" placeholder="Skill Level" name="skilllevel" value="<?php echo $SkillLevel; ?>">
						<input type="text" class="form-control mb-4" placeholder="Minimum Experience" name="minimumexperience" value="<?php echo $MinimumExperience; ?>">
						<input type="text" class="form-control mb-4" placeholder="Relevent Experience" name="releventexperience" value="<?php echo $ReleventExperience; ?>">
						<input type="text" class="form-control mb-4" placeholder="Qualification" name="qualification" value="<?php echo $Qualification; ?>">
						<input type="text" class="form-control mb-4" placeholder="Certification" name="certification" value="<?php echo $Certification; ?>">
						<input type="text" class="form-control mb-4" placeholder="Target Date" name="targetdate" value="<?php echo $TargetDate; ?>">
						<input type="text" class="form-control mb-4" placeholder="Company Name" name="companyname" value="<?php echo $CompanyName; ?>">
						<input type="text" class="form-control mb-4" placeholder="Status" name="status" value="<?php echo $Status; ?>">
						<input type="text" class="form-control mb-4" placeholder="Priority" name="priority" value="<?php echo $Priority; ?>">
						<input type="text" class="form-control mb-4" placeholder="Requester Name" name="requestername" value="<?php echo $RequesterName; ?>">
						<input type="text" class="form-control mb-4" placeholder="Requester Email" name="requesteremail" value="<?php echo $RequesterEmail; ?>">
						<input type="text" class="form-control mb-4" placeholder="Requester Contact" name="requestercontact" value="<?php echo $RequesterContact ; ?>">
						<input type="text" class="form-control mb-4" placeholder="Remark(if any)" name="remark" value="<?php echo $Remark; ?>">
						<button class="btn btn-primary" name="update">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
