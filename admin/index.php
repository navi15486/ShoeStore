<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>

    <script src="../js/myApp.js"></script>
</head>
<body ng-app="mainApp">
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top " role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container"  >
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

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
                <li  ><a href="#/main">Home</a></li>
                <li> <a href="#/men" >Men</a></li>
                <li> <a href="#/women">Women</a></li>
                <li> <a href="#/kids">Kids</a></li>
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
<div class="container">
    <div class="jumbotron">
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>
    <script>

    </script>
    <div ng-controller="MainController">
    {{message}}

    </div>

    <div ng-view></div>
    <div class="row">
        <div class="col-sm-4">
            <h3>Column 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
            <h3>Column 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
            <h3>Column 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
</div>

</body>
</html>