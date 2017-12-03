<!--*
 * User Sign up
 *
 * Date e.g. 21/3/2016
 *
 * @reference http://www.codingcage.com/2015/01/user-registration-and-login-script-using-php-mysql.html
 *
 -->
 
<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: index.php");
}
include_once 'dbconnect.php';

   $errors = array();
    /* declare the array for later use */
    
    if (isset($_POST['user_name'])) {
        //the user name exists
        if (!ctype_alnum($_POST['username'])) {
            $errors[] = 'The username can only contain letters and digits.';
        }
        if (strlen($_POST['username']) > 30) {
            $errors[] = 'The username cannot be longer than 30 characters.';
        }
    } else {
        $errors[] = 'The username field must not be empty.';
    }
    

if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
  
  $query = mysql_query("Select * From users WHERE username ='$user'");
if(mysql_num_rows($query) > 0 ) {
  echo '<script language="javascript">';
echo 'alert("UserName already exists")';
echo '</script>';
}
 
 else{
     (mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"));
   echo '<script language="javascript">';
echo 'alert("You have successfully registered")';
echo '</script>';
 }
 
}


 
mysql_close();

?>


<!DOCTYPE html>
<html>

   <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
          <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
           <link rel="stylesheet" type="text/css" href="Style.css">
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <title> </title>
    </head>

 
 <body>
  <div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
 <div class="col-md-4">
      <section class="login-form">
   <form method="post" action="#" role="login">
     <img src="Muscian Connect.png" class="img-responsive" alt="" />
 
       
      
      <input type="text" name="uname" class="form-control input-lg" placeholder="User Name" required />
      
         
       
       <input type="email" name="email" class="form-control input-lg" placeholder="Your Email" required />
       

        
        <input type="password" name="pass" class="form-control input-lg" placeholder="Your Password" required />
          <div class="pwstrength_viewport_progress"></div>
        
 
         
         <button type="submit"  class="btn btn-lg btn-primary btn-block" name="btn-signup">Sign Me Up</button>
         
                  

  
    </form>
    
            <a href="Login.php" style="color:#f0ad4e; font-size:14px;" >Sign In Here</a>
          
          <div class="form-links">
          <a href="#">www.musicianconnect.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      
</div>
   </div>
 </body>
</html>