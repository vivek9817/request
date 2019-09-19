 <?php 
 
 include_once("core.php");
 
		 
?>
		
		
		
		
<!DOCTYPE html>
<html>
<head>
	<title>password recovery</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="sty.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<form  action="forget_pass.php" class="form-signin" method="POST">
        <h2 class="form-signin-heading">Forgot Password</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"></span>
	  <input type="email" name="user" class="form-control" placeholder="email id" required>
	</div>
	<br>
	<?php  echo $_SESSION["alert"]; ?>
		<input type="hidden" name="uname" value="jogi">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>
        <a clas=""btn btn-lg btn-primary btn-block" href="index.php">Login</a>
</form>
	 
	 <?php  echo $_SESSION["alert"]="" ?>
	 
	 
	 
	 
	 
	 <button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>




	  </body>
	  </html>
	  