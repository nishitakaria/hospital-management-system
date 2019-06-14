<?php require('connection.php');?>
<html>
<head>
	<title>Add New Doctor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head> 
<body>
	<div class="container">
	<table class="table table-bordered">
		<tr bgcolor="blue">
			<td align="center">
				<font SIZE=6 color="white">SAVING HANDS HOSPITAL</font>
			</td>
		</tr>
		<tr>
			<td>
				<table align="center" width="750" cellspacing=0 cellpadding=5>
					<tr>
						<td align=center><a href=dlist.php>Doctors</a></td>
						 
						<td align=center><a href=alist.php>Appointments</a></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr bgcolor=#045FB4>
			<td ><font size=4 color=white>New Doctor</font></td>
		</tr>
	</table>
	<form name="fdadd" method="post" action="dsave.php" class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Doctor Name">
			<br/>
			<input type="text" name="spec" class="form-control" placeholder="Specialization">
			<input type="submit" name="submit" value="submit">
			 
		</form>
	</div>
</body>
</html>