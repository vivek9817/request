<?php



?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>
		Registration page
	</title>
	</head>
	<body class="bg">
	<div class="container-fluid">
	    <div class="row">
			<div class="col-md-12 ">
				<img src="lrss.png">
			</div>
		</div>
		
		
		<div class="row">
		    <div class="col-md-4">
			</div>
		
			<div class="col-md-4">
				<div class="res">
					<form action="connn.php" method="post" > 
						<h1>
							<center><b>Register here </b></center>
						</h1>
						<div class="form-group">
							USERNAME:
							<input type="text" placeholder="username" class"form-control" name="user" required >
						</div>
						<div class="form-group">
							PASSWORD: <input type="password" placeholder="password" class"form-control" name="password" required >
						</div>
						<div class="form-group">
							C_PASSWORD: <input type="password" placeholder="password" class"form-control" name="cpassword" required >
						</div>
						<div class="form-group">
							ADDRESS:   <input type="text" placeholder="full address" class"form-control" name="address">
						</div>
						<div class="form-group">
							MOBILE: 
								<select><option>+91</option>
								<option>+92</option>
								<option>+93</option>
								<option>+90</option>
								<option>+94</option>
								<option>+99</option></select>
								<input type="number" placeholder="phone no." class"form-control" name="phone" required >
						</div>
						<div class="form-group">
							<input type="submit" id="button" value="sign up" class="btn btn-outline-danger" align="right">
						</div>
					</form>
				</div>
			</div>
		
			<div class="col-md-4">
		
			</div>
		</div>
	</div>	
		
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
