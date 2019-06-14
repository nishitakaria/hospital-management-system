

<?php
if(isset($_POST["submit"]))
{
	$fname=$_POST["Firstname"];
	$lname=$_POST["Lastname"];
	$pn=$_POST["phoneno"];
	$email=$_POST["email"];
	$pass=$_POST["password"];
	$dob=$_POST["dob"];
	$gender=$_POST["gender"];
	include 'connection.php';
	$sql="SELECT * FROM registration WHERE email='".$email."' ";
	$query=mysqli_query($con,$sql);
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
	{
		$sql2="INSERT INTO registration VALUES ('$fname','$lname',$pn,'$email','$pass','$dob','$gender')";
		if($con->query($sql2) === TRUE)
		{
			echo "<br>
			<br>";
		}
		else
		{
			echo "Error Inserting the Values: " . $con->error;
		}
	}
	else
	{
		$mess="E-mail already Registered";
		echo "<br><script type='text/javascript'> alert('$mess');</script>";
	}
	mysqli_close($con);
	}
 ?>

 <style type="text/css">
	p{
		color: white;
		text-align: center;
	}
</style>

 <html>
 <body background="h11.jpg">
 <p> 
 	<a href="hm.php"><h1>BACK TO HOME PAGE</h1></a></p>
 </body>
 </html>