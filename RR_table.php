<!doctype html>
<html>
<head>
<title>



table


</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  
  
 
  
  
  </head>
  <body>
  
  
  
  
  
  
  
  
  
  
  
  
  
  <div class="row justify-content-center">
  <form action="process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="form-group">
  <label>Name</label>
  <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter your name">
  </div>
  <div class="form-group">
  <label>Location</label>
  <input type="text" name="location" class="form-control" value="<?php echo $location; ?>" placeholder="Enter your location">
  </div>
  <div class="form-group">
  <?php 
  if($update==true):?>
  <button type="submit" class="btn btn-info" name="update">Update</button>
  <?php else: ?>
  <button type="submit" class="btn btn-primary" name="save">save</button>
  <?php endif; ?>
  </div>
  </form>
  </div>
  
  
  </body>
  </html>