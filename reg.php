<?php 
include_once("core.php");

?><!doctype html>
<html>
	<head>
		<title>
			Registration page
		</title>
			<link rel="stylesheet" type="text/css"= href="style.css?v=2">
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
			<link   rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
				<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
			<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
				<!------ Include the above in your HEAD tag ---------->
				
				
				<script>
					function myFunction() {
					var x = document.getElementById("fname");
					x.value = x.value.toUpperCase();
					}
				</script>


	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
<div class="container">
<br>  <p class="text-center">About The Company <a href="#"> LRS SERVICES PVT.LTD</a></p>
<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form action="connn.php" method="post">
	  <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i>  </span>
		 </div>
       
		<input type="email" placeholder="email id" class"form-control" name="user" required >
	  </div> <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-lock"></i>  </span>
			 </div>
			<input type="password" placeholder="password" class"form-control" name="password" required >
		</div> <!-- form-group// -->
		 <div class="form-group input-group">
			<div class="input-group-prepend">
			 <span class="input-group-text"> <i class="fa fa-lock"></i>   </span>
			</div>
		   <input type="password" placeholder=" confrm password" class"form-control" name="cpassword" required >
		</div> <!-- form-group// --> 
		  <div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-home"></i>    </span>
			</div>
			<input type="text" placeholder="full address" class"form-control" name="address" onchange="myFunction()">
		</div> <!-- form-group// -->
		<div class="form-group input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"> <i class="fa fa-phone"></i>
		
			<select class="custom-select" style="max-width: 120px;">
				<option>+91</option>
				<option>+92</option>
				<option>+93</option>
				<option>+90</option>
				<option>+94</option>
				<option>+99</option>
			</select>
			</span>
			</div>
			<input name="phone" class="form-control" placeholder="Phone number" type="text">
		</div> <!-- form-group// -->                               
    <div class="form-group  ">
        <button type="submit" class="btn btn-success btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="index.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">LRS LOGO</h3>
<p class="h5 text-white">Inquary   <br> </p>   <br>
<p><a class="btn btn-warning" target="_blank" href="#"> LRS SERVICES PVT.LTD 
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br>
</article>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

			
			
			
			
			
			
			
			
			
			
			
			