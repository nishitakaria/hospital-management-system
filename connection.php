<?php 
session_start();
error_reporting(1);

if(!mysqli_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 $con = mysqli_connect("localhost","root","","hospital");

/*if($_SESSION['admin']=="")
{
header('hm.php');
}*/
 
?>
<h3 style="background:#0B4C5F;padding:20px;color:#FFFFFF;margin:0px">
	<span>Welcome!</span>
	<span style="float:right"><a style="color:#FFFFFF" href="logout.php">Logout</a></span>
</h3>