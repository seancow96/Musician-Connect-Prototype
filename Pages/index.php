<?php
ob_start();
include 'header.php';

    session_start();
    include_once 'dbconnect.php';

    if(!isset($_SESSION['user']))
    {
     header("Location: index.php");
    }
        $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
        $userRow=mysql_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="Style.css">
  </head>

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    
                   <div id="content">
                       Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout" style="color:white;">Sign Out</a>
                   </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h1 class="display-3">Welcome to musicianconnect !</h1>
            <p class="lead">Use the search feature below to find musicians/bands!</p>
            <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>

        </header>

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="About_home.jpg" alt="">
                    <div class="card-block">
                        <h4 class="card-title">About</h4>
                        <p class="card-text">Muscian Connect is web application that allows musicinans what it can do for you!</p>
                    </div>
                    <div class="card-footer">
                        <a href="About.php" class="btn btn-primary">Find Out More!</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="Profile.png" alt=""  height="500" width="325">
                    <div class="card-block">
                        <h4 class="card-title">Profile</h4>
                        <p class="card-text">Want to be discovered? Click on the profile option and edit your profile.</p>
                    </div>
                    <div class="card-footer">
                        <a href="Profile.php" class="btn btn-primary">Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="Chat.png" alt=""  height="500" width="325">
                    <div class="card-block">
                        <h4 class="card-title">Chat</h4>
                        <p class="card-text">Click on a users profile to chat with them!</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Chat</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="GoogleMap.png" alt="" height="500" width="325">
                    <div class="card-block">
                        <h4 class="card-title">GeoSearch</h4>
                        <p class="card-text">Use geolocation to find users near you.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Search Users Near You!</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
