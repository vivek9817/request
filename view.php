<?php

require_once("record.php");

$query = "select * from rr_request";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-UA-compatible" content="ie=edge">
  <title> view request</title>
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
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" >
  <!-- Custom styles for this template -->
  

 
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col m-auto">
			<div class="card mt-5">
				
				
				<table>
				<tr>
				<td> RR ID </td>
				<td> Date </td>
				<td> Domain </td>
				<td> RR Type </td>
				<td> Region </td>
				<td> Skill Level </td>
				<td> Minimum Experience </td>
				<td> Relevent Experience </td>
				<td> Qualification </td>
				<td> Certification </td>
				<td> Target date </td>
				<td> Company name </td>
				<td> Status </td>
				<td> Requester Name </td>
				<td> Requester Email </td>
				<td> Requester Contact </td>
				<td> Remark </td>
				</tr>
				
				
				<?php
				
				
				while($row= mysqli_fetch_assoc($result))
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
					$RequesterEmail = $row['Requester Email'];
					$RequesterContact = $row['Requester Contact'];
					$Remark = $row['Remark'];
					
				
				?>
				
				<tr>
				<td><?php echo $RRID; ?></td>
				<td><?php echo $Date; ?></td>
				<td><?php echo $Domain; ?></td>
				<td><?php echo $RRType; ?></td>
				<td><?php echo $Region; ?></td>
				<td><?php echo $SkillLevel; ?></td>
				<td><?php echo $MinimumExperience; ?></td>
				<td><?php echo $ReleventExperience; ?></td>
				<td><?php echo $Qualification; ?></td>
				<td><?php echo $Certification; ?></td>
				<td><?php echo $TargetDate; ?></td>
				<td><?php echo $CompanyName; ?></td>
				<td><?php echo $Status; ?></td>
				<td><?php echo $RequesterName; ?></td>
				<td><?php echo $RequesterEmail; ?></td>
				<td><?php echo $RequesterContact; ?></td>
				<td><?php echo $Remark; ?></td>
				<td><a href="edit.php?edit=<?php echo $RRID ?>" class="btn btn-info">Edit</a></td><br>
				<td><a href="delete.php?Del=<?php echo $RRID ?>" class="btn btn-primary">Delete</a></td>
				</tr>
				
				<?php
				}
				
				?>
				</table>
				
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
