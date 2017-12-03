<!--*
 * User Sign in
 *
 *
 * @reference http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html
 *
 -->
 
<!-- PHP code to send user information to database-->
<?php
 session_start();
  include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
 {
  header("Location: index.php");
 }
  if(isset($_POST['btn-login']))
   {
    $email = mysql_real_escape_string($_POST['email']);
    $upass = mysql_real_escape_string($_POST['pass']);
    $res=mysql_query("SELECT * FROM users WHERE email='$email'");
    $row=mysql_fetch_array($res);
     if($row['password']==md5($upass))
     {
      $_SESSION['user'] = $row['user_id'];
      header("Location: index.php");
    }
     else
    {
     ?>
        <script>alert('Oops! That was incorrect!');</script>
        <?php
   }
 
 }
  ?>
<!-- End of PHP  -->

<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
           <link rel="stylesheet" type="text/css" href="Style.css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
    </head>
    <body>
<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <img src="Muscian Connect.png" class="img-responsive"  alt="" />
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" value="Email" />
          
          <input type="password" class="form-control input-lg" name="pass" id="password" placeholder="Your Password" required alt="password" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="btn-login" class="btn btn-lg btn-primary btn-block" alt="sign in button">Sign in</button>
         
          
        </form>
        
        <div class="form-links">
          <a href="register.php">www.musicianconnect.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  
    
  
  
</div>
    </body>
</html>