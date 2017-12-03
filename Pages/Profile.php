<?php
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="Style.css">

  
</head>

<body>
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
          Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout" style="color:white;">Sign Out</a>
       <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Sheena Shrestha</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
                <!--profile pic goes below-->
               
                <?php
                   
                   
                   
                   
    				if($_SESSION['signed_in'])
    				{
    					
    					               $servername = "localhost";
$username = "seancowley9600";
$password = "";
$dbname = "dbtest";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname);

$_SESSION['user_name'];
$sql = "SELECT userPic FROM users WHERE user_name = '{$_SESSION['user_name']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
     echo "<img width='200' height='200' src='img/".$row['userPic']."' alt='Profile Pic'>";;
     }
     
} 
    				}
    				else
    				{
    				
    				}
    				?>
                </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Intruments Played</td>
                        <td>Guitar</td>
                         <td>Bass Guitar</td>
                      </tr>
                      <tr>
                        <td>Genre</td>
                        <td>Rock</td>
                      </tr>
                      <tr>
                        <td>Age</td>
                        <td>21</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Gigs Played</td>
                        <td>10-15</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                      <tr>
                        <td>Experience</td>
                        <td> 7 years </td>
                        </td>
                      </tr>
                       <tr>
                        <td>Rating</td>
                        <td> N/A</td>
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
               
               
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        
                    </div>
            
          </div>
        </div>
      </div>
    </div>
   

    <!-- /.container -->

        <?php
        include 'footer.php';
        
        ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>