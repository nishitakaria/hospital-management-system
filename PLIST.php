<?php
require('connection.php');
error_reporting(1);
?><html>
<head>
	<title>Patients Lists</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head> 
<body>
	<table class="table table-bordered">
		<tr bgcolor=#3104B4><td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td></tr>
		<tr>
			<td>
			<table align=center width=750 cellspacing=0 cellpadding=5>
				<tr>
					<td align=center><a href=plist.php>Patients</td></a>
					<td align=center><a href=alist.php>Appointments</td></a>
				</td>
			</table>
		    </td>
	   </tr>
		<tr bgcolor=#045FB4>
			<td >
				<font size=4 color=white>Patient List</font>
			</td>
		</tr>
		<tr>
			<td>
				<a href=padd.php>Add New Record</a>
			</td>
		</tr>
		<tr>
			<td>
				<table width=750 cellspacing=0 cellpadding=5>
					<tr bgcolor=#ccccc>
						<td align=center>S No</td>
						<td align=center>Patient Name</td>
						<td align=center>Address</td>
						<td align=center>Sex</td>
						<td align=center>Disease</td>
						<td align=center>Options</td>
						
					</tr>
			<?php


			$rs1=mysqli_query($con,"SELECT * from patient where pshow='Y' order by
				pname;");
			$sno=1;
			while( $row=mysqli_fetch_array($rs1)) {
				echo "<tr>
						<td>$sno</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td><a href=pmod.php?rno=".$row[0].">Modify</a> | <a href=pdel.php?rno=".$row[0].">Delete</a></td>
					</tr>";
				$sno++;
			}
			if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
				Not Found</font></td></tr>";
			?>
			</table>
		</td>
	</tr>
	<tr>
		<td align=center><hr></td>
	</tr>
	<tr bgcolor=#045FB4>
		<td><font size=4 color=white>Deleted Records</font></td>
	</tr>
	<tr>
		<td>
			<table width=750 cellspacing=0 cellpadding=5>
			<tr bgcolor=#ccccc>
				<td align=center>S No</td>
				<td align=center>Patient Name</td>
				<td align=center>Address</td>
				<td align="center">Disease</td>
				<td align=center>Options</td>
			</tr>
			<?php
			$rs2=mysqli_query($con,"SELECT * from patient where pshow='N' order by
				pname;");
			$sno=1;
			while( $row=mysqli_fetch_array($rs2)) {
				echo "<tr>
						<td>$sno</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[4]</td>
						<td><a href=Pundel.php?rno=".$row[0].">Undelete</a></td>
						</tr>";
				$sno++;
			}
			if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
				Not Found</font></td></tr>";
			?>
		</table></td></tr>
	</table>
</body>
</html> 