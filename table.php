
<!doctype html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Basic Table</title>
  <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  
  

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  
</head>

<body>
  <section id="container">
    <!-- 
        TOP BAR CONTENT 
         -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>RR<span>REQUEST</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme"></span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme"></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="img/pp01.jpg"></span>
                  <span class="subject">
                  <span class="from">Vivek</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="img/pp03.jpg"></span>
                  <span class="subject">
                  <span class="from">Tufan </span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="img/pp04.jpg"></span>
                  <span class="subject">
                  <span class="from">Suresh</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="img/pp05.jpg"></span>
                  <span class="subject">
                  <span class="from">Amandeep</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning"></span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory 2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/pp02.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Vivek singh</h5>
          <li class="mt">
            <a href="#">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="#">Grids</a></li>
              <li><a href="#">Calendar</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              
              <li><a href="index.php">Login</a></li>
              <li><a href="#">Lock Screen</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">FAQ</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              
              <li><a href="#">Advanced Components</a></li>
             
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="table.php">Basic Table</a></li>
              
              <li><a href="nw.php">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span> </span>
              <span class="label label-theme pull-right mail-info"></span>
              </a>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
             
             
              <li><a href="#">Flot Charts</a></li>
              <li><a href="xx.php">xChart</a></li>
            </ul>
          </li>
          
          <li>
            <a href="#">
              <i class="fa fa-map-marker"></i>
              <span>Location </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
   
    <!--main content start-->
    
  <body>
  
  
  
  <?php require_once'process.php';?>
  
  <?php if(isset($_SESSION['message'])):?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
  
  
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif; ?>
  
  
  
  
  <div class="container">
  <?php

     $mysqli=new mysqli('localhost','root','','demo') or die($mysqli_error($mysqli));

     $result=mysqli_query($mysqli,"SELECT * FROM rtable") or die($mysqli->error);
	 
	 
	 
	        //pre_r($result);
			
			//pre_r($result->fetch_assoc
			
			?>
			
	<div class="row justify-content-center">
	<table class="table">
		<thead>
			<tr>
				<th> Name </th>
				<th> Location </th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<?php while($row = $result->fetch_assoc()):?>
		<tr>
			<td>
				<?php echo $row['name'];?>
			</td>
			<td>
				<?php echo $row['location'];?>
			</td>
			<td>
				<a href="table.php?edit=<?php echo $row['id']?>"
				class="btn btn-info">Edit</a>
				
				<a href="table.php?delete=<?php echo $row['id']?>"
				class="btn btn-danger">Delete</a>
			</td>
		</tr>
		<?php  endwhile;    ?>
	</table>
  </div>

  
  
			
	<?php		
	 function pre_r($array)
	 {
		 echo'<pre>';
		 print_r($array);
		 echo'</pre>';
		 
	 }
	 
	?>
	</div>

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
   <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>LRS SERVICES</strong>. All Rights Reserved
        </p>
        <div class="credits">
         
          Created by vivek singh 
        </div>
        <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/chart-master/Chart.js"></script>
  <script src="lib/chartjs-conf.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
  <!---  $(function() {
      //    fancybox
     <!--- jQuery(".fancybox").fancybox();
    });--->
	
	
	
	
	
	
	
	
	 <!--script for this page-->
  <script src="lib/xchart/d3.v3.min.js"></script>
  <script src="lib/xchart/xcharts.min.js"></script>

  

</body>

</html>

  


