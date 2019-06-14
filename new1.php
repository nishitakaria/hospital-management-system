<?php require('connection.php');?>
<html>
<head>
	<title>All Doctors List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head> 
<body>
	<table class="table table-bordered">
		<tr bgcolor=blue><td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td></tr>
				<tr bgcolor=#045FB4><td ><font size=4 color=white>Doctors
				List</font></td></tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>


<?php
 $user=$_POST['username'];
 $pass=$_POST['password'];
 
$rs1=mysqli_query($con,"SELECT * from registration where email='$user' order by
						lname;");
					
					while( $row=mysqli_fetch_array($rs1)) {
						echo "Name: ". $row['fname'] ."  ".$row['lname']; 
						echo "<br>Phone no: ". $row['pn'];
						echo "<br>Email: ". $row['email'];
						echo "<br>Date of birth: ". $row['dob'];
						echo "<br>Gender: ". $row['gender']; 
						
					}
echo "<br><br><input type=button value='modify'>";


					$rs2=mysqli_query($con,"SELECT * from appt where adoctor='13';");
					
					while( $row=mysqli_fetch_array($rs2)) {
						echo "<br><br>appointment date: ".$row['adate'];
						echo "<br>appointment time: ".$row['atime'];
						
					}
		?>
