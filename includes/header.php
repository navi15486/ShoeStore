
<!DOCTYPE html>
	<html>
		<head>
			<script src="//code.jquery.com/jquery-latest.min.js"></script>  
<script src="//unslider.com/unslider.min.js"></script>

			<link rel="stylesheet" type="text/css" href="style/style.css"/>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

            <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>

            <script src="js/myApp.js"></script>
			<script type="text/javascript">
				//javascript to make dynamic pages
				 $(document).ready(function () {
			        var url = window.location;
			        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
			        $('ul.nav a').filter(function() {
			             return this.href == url;
			        }).parent().addClass('active');
    			});

				var index = 1

				function mouuseout(id) {
					document.getElementById(id).style.opacity = 1
				}
				function onHover(id) {
					document.getElementById(id).style.opacity = 0.5
				}
			</script>
			<title>Aman Shoe Store</title>
		</head>
<body ng-app = "mainApp">
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top " role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="container">
		<div class="navbar-header ">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href = "index.php"><img id = "logo"  src = "images/logo.png" /></a>
			
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse " id="navbarCollapse">
			<div class="col-sm-3 col-md-3 pull-right">
        		<form class="navbar-form" role="search">
        			<div class="input-group">
            			<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            				<div class="input-group-btn">
               				 <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            				</div>
        			</div>
       		    </form>
        	</div>
			<ul class="nav navbar-nav navbar-right"> 
				<li  ><a href="#main">Home</a></li>
				<li> <a href="#men" >Men</a></li>
				<li> <a href="#women">Women</a></li>
				<li> <a href="#kids">Kids</a></li>
				<li><a href="signup.php">Create an Account</a></li>
				<?php 
				//start the session and verify if user session is set or not
					session_start();
					if(isset($_SESSION['user'])  ) { 
				?>
				<li > 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
						<span class="glyphicon glyphicon-user"></span>
					</a>
		            <ul class="dropdown-menu">
		            	<li><a href="logout.php">logout</a></li>
		            </ul>
		        </li>

				<?php
					}
					else {
				?>

				<li ><a href="login.php">Login</a></li>
				
				<?php
					}
				?>
				<?php
					if(isset($_SESSION['user'])  ) {
			 	?>

				<!--<li><a href = "#"><?php echo $_SESSION['user']; ?></a></li>-->
				<?php 
			}
				?>
			</ul>			 
		</div>
	</div>
</nav>
 
	<div class="jumbotron  ">
	<!--div for all the content-->

		<!--div style to make contents in middle-->
		<div id = "fullContent" >
			<!--header div starts here-->



	<!--Search Box---HTML5
	<div class = "right">
	<form class = "search" >
	  <input type="search" name="googlesearch">
	</form></div>
	-->
	<!--header div close here-->

			<!--div for contents-->
			<div id = "content">