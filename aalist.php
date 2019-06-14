<?php
require('connection.php');
error_reporting(1);
?>
<html>
<head>
	<title>ADMIN PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!--link rel="stylesheet" href="css/bootstrap.css"/-->
</head> 
<body>
	<table class="table table-bordered">

		<tr bgcolor=#3104B4><td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td></tr>
		<tr><td>
			<table align=center width=750 cellspacing=0 cellpadding=5>
				<tr><td align=center><a href=alist.php><b>Appointments</b></td>
					<td align=center><a href=salary.php><b>Salary Structure</b></td>
				</table>
			</td></tr>
			<tr bgcolor=#045FB4><td ><font size=4 color=white>Appointments List</font></td></tr>
			<tr><td><a href=app.php>Add New Appointments</a></td></tr>
			<tr><td>
				<table width=750 cellspacing=0 cellpadding=5>
				<?php

				if($_GET['rno']!=null)
				{
					$todel=$_GET['rno'];
					mysqli_query($con,"update appt SET ashow='N' where ano='$todel' ;");
				}
				$rs1=mysqli_query($con,"SELECT * from appt where ashow='Y'");
				$sno=1;
				$rows = mysqli_num_rows($rs1);
				if ($rows >=1) {
					echo "
					<tr bgcolor=#ccccc>
					<td align=center>S No</td>
					<td align=center>Patient Name</td>
					<td align=center>Doctor Name</td>
					<td align=center>Time</td>
					<td align=center>Date</td>
					<td align=center>Options</td>
				</tr>";
				}
				while( $row=mysqli_fetch_array($rs1)) {

					$rs2=mysqli_query($con, "SELECT pname from patient where pno='$row[2]'");
					$rs3=mysqli_query($con,"SELECT dname from doct where dno='$row[1]'");
					$rs22=mysqli_fetch_assoc($rs2);
					$rs33=mysqli_fetch_assoc($rs3);
					echo "<tr><td>$sno</td><td>$rs22[pname]</td><td>$rs33[dname]</td><td>$row[3]</td><td>$row[5]</td><td><a
					href=alist.php?rno=".$row[0].">Delete</a></td></tr>";
					$sno++;
				}
				if ($sno==1) 
					echo '<div class="alert alert-danger" role="alert" style="text-align:center;">No Records Found</div>';?>
				</table>
			</td>
		</tr>
		<tr>
			<td align=center><hr></td>
		</tr>
		<tr bgcolor=#045FB4>
			<td>
				<font size=4 color=white>Deleted Records</font>
			</td>
		</tr>
		<tr>
			<td>
				<table width=750 cellspacing=0 cellpadding=5>

		<?php
		$rs1=mysqli_query($con,"SELECT * from appt where ashow='N'");
		$sno=1;
		$rows = mysqli_num_rows($rs1);
		if ($rows >= 1) {
			echo "
			<tr bgcolor=#ccccc>
						<td align=center>S No</td>
						<td align=center>Patient Name</td>
						<td align=center>Doctor Name</td>
						<td align=center>Time</td>
						<td align=center>Date</td>
						<td align=center>Options</td>
					</tr>";
		}
		while( $row=mysqli_fetch_array($rs1)) {

			$rs2=mysqli_query($con, "SELECT pname from patient where pno='$row[2]'");
			$rs3=mysqli_query($con, "SELECT dname from doct where dno='$row[1]'");
			$rs22=mysqli_fetch_assoc($rs2);
			$rs33=mysqli_fetch_assoc($rs3);
			echo "<tr><td>$sno</td><td>$rs22[pname]</td><td>$rs33[dname]</td><td>$row[3]</td><td>$row[5]</td><td><a
			href=aundel.php?rno=".$row[0].">Undelete</a></td></tr>";
			$sno++;
		}
		if ($sno==1) 
			echo '<div class="alert alert-danger" role="alert" style="text-align:center;">No Records Found</div>';
		?>
	</table></td></tr>
</table>
</body>
</html> 