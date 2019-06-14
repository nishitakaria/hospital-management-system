<?php
session_start();
error_reporting(1);
if(!mysqli_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 echo "Connect database";
 $con = mysqli_connect("localhost","root","", "hospital");
 
 extract($_POST);
 if(isset($_POST['signIn']))
 {
	//echo $user,$pass;
	$que=mysqli_query($con,"select user,pass from admin where user='$user' and pass='$pass'");
	 $row= mysqli_num_rows($que);
   echo $row;
	 if($row)
	 {
		$_SESSION['admin']=$user;
		echo "<script>window.location='alist.php'</script>";
		
		//include('alist.php');
	 	
	 }
	 else
	 {
	  $err="<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid admin Login</font>";
	 }
	
 
 }
if($_SESSION['admin']!="")
{
header('alist.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Hospital Management System</title>

  
  </head>

  <body>



    <div class="container">
	
      <form method="post" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label><?php echo $err; ?></label>
		<label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="user" class="form-control" placeholder="admin@gmail.com" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="admin" required>
        
<button class="btn btn-lg btn-primary btn-block" name="signIn" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
