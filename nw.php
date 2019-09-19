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
					<h3 class="bg-success text-white text-center py-3"> RR TABLE </h3>
				</div>
				<div class="card-body">
					<form action="insert.php" method="post">
						<input type="text" class="form-control mb-2" placeholder="Date" name="date">
						<input type="text" class="form-control mb-2" placeholder="Domain" name="domain">
						<input type="text" class="form-control mb-2" placeholder="RR Type" name="rrtype">
						<input type="text" class="form-control mb-2" placeholder="Region" name="region">
						<input type="text" class="form-control mb-2" placeholder="Skill Level" name="skilllevel">
						<input type="text" class="form-control mb-2" placeholder="Minimum Experience" name="minimumexperience">
						<input type="text" class="form-control mb-2" placeholder="Relevent Experience" name="releventexperience">
						<input type="text" class="form-control mb-2" placeholder="Qualification" name="qualification">
						<input type="text" class="form-control mb-2" placeholder="Certification" name="certification">
						<input type="text" class="form-control mb-2" placeholder="Target Date" name="targetdate">
						<input type="text" class="form-control mb-2" placeholder="Company Name" name="companyname">
						<input type="text" class="form-control mb-2" placeholder="Status" name="status">
						<input type="text" class="form-control mb-2" placeholder="Priority" name="priority">
						<input type="text" class="form-control mb-2" placeholder="Requester Name" name="requestername">
						<input type="text" class="form-control mb-2" placeholder="Requester Email" name="requesteremail">
						<input type="text" class="form-control mb-2" placeholder="Requester Contact" name="requestercontact">
						<input type="text" class="form-control mb-2" placeholder="Remark(if any)" name="remark">
						<button class="btn btn-primary" name="submit">submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
