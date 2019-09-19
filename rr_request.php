




<?php
include_once("core.php");
if(!$_SESSION['logged'])
{
hrader("location:index.php");
exit;
}
?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/fancybox/jquery.fancybox.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/jquery/jquery.min.js"></script>
</head>
<body>
<section id="container">
<section id="main-content">
<section class="wrapper" style="position:relative;">
<div class="row mt">
<div class="col-md-12">
<div class="panel panel-success">
<div class="panel-heading"><center><b><h2 style="margin-top:5px;">Resource Request List</h2></b></center></div>
<div class="panel-body table-responsive">

<?php
$rs=mysqli_query($conn,"SELECT*FROM rr_request ORDER BY RR ID DESC;") or die(mysqli_error($conn));



if(mysqli_num_rows($rs)>0)
{
echo"<table class='table table-hover'>

	<tr class='text-center info'>
	    <th class='nowrap'>RR ID</th>
 	    <th class='nowrap'>Date</th>
                      <th class='nowrap'>Domain</th>
                      <th class='nowrap'>Region</th>
	    <th class='nowrap'>Quantity</th>
 	    <th class='nowrap'>Skill Level</th>
 	    <th style='white-space:nowrap'>Minimun Experience</th>
   	    <th class='nowrap'>Relevent Experience</th>
	      <th class='nowrap'>Qualification</th>
  	      <th class='nowrap'>Certificate</th>
 	      <th class='nowrap'>Target Date</th>
	     <th class='nowrap'>Company Name</th>
 	     <th class='nowrap'>Client Name</th>
 	    <th class='nowrap'>Status</th>
 	    <th class='nowrap'>Priority</th>
                     <th class='nowrap'>Request Name</th>
 	   <th class='nowrap'>Request Email</th>
	     <th class='nowrap'>Request Contact</th>
	     <th class='nowrap'>Created</th>
	     <th class='nowrap'>Remark(if any)</th>
	     <th class='nowrap'></th>
       	    <th class='nowrap'></th>
</tr>
</thead>";






while($row=mysqli_fetch_assoc($rs))
{
$rr_date=$row["rr_date"];
$rr_domain=$row["rr_domain"];
$rr_type=$row["rr_type"];
$rr_region=$row["rr_region"];
$rr_quantity=$row["rr_quantity"];
$rr_skill_level=$row["rr_skill_level"];
$rr_min_exp=$row["rr_min_exp"];
$rr_relevent_exp=$row["rr_relevent_exp"];
$rr_qualification=$row["rr_qualification"];
$rr_certification=$row["rr_certification"];
$rr_target_date=$row["rr_target_date"];
$rr_company_name=$row["rr_company_name"];
$rr_client_name=$row["rr_client_name"];
$rr_status=$row["rr_status"];
$rr_priority=$row["rr_priority"];


$rr_request_name=$row["rr_request_name"];
$rr_request_email=$row["rr_request_email"];
$rr_request_contact=$row["rr_request_contact"];
           $rr_remark=$row["rr_remark"];
	echo"

	
	<tbody>
<tr>
<td class='nowrap'><a href='candidate_status.php?rr=".$row["rr_id_full"]."'><b>".$row["rr_id_full"]."</b></a></td>


<td class='nowrap'>".$rr_date."</td>
<td class='nowrap'>".$rr_domain."</td>
<td class='nowrap'>".$rr_type."</td>
<td class='nowrap'>".$rr_region."</td>
<td class='nowrap'>".$rr_quantity."</td>
<td class='nowrap'>".$rr_skill_exp."</td>
<td class='nowrap'>".$rr_relevent_exp."</td>
<td class='nowrap'>".$rr_qualification."</td>
<td class='nowrap'>".$rr_certification."</td>
<td class='nowrap'>".$rr_target_date."</td>
<td class='nowrap'>".$rr_company_name."</td>
<td class='nowrap'>".$rr_client_name."</td>
<td class='nowrap'>".$rr_status."</td>
<td class='nowrap'>".$rr_priority."</td>
<td class='nowrap'>".$rr_requester_name."</td>
<td class='nowrap'>".$rr_requester_email."</td>
<td class='nowrap'>".$rr_requester_contact."</td>
<td class='nowrap'>".date("d/m/y h:i A",strtotime($row["created"]))."</td>
<td>".$rr_remark."</td>";
if($_SESSION["email"]==$rr_requester_email || $_SESSION["level"]=="ADMIN")

{
echo"<td class='nowrap'>
<a class='fa fa-edit' href='update_request.php?rr=".$["RR ID"]."'><b>EDIT</b></a></td>
}
else
{
echo"<td></td>";
}
".<td><td>
</tr>
</tbody>";
}
echo"</table>";
}
else
{
echo"0 results";
}$conn->close();
?>

</div>
</div>
</div>
</div>
</section>
</section>
</body>
</html>
