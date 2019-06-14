<?php require('connection.php');?>
<html>
 <head>
  <title>Add New Patient</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 </head> 
 <body>
<table class="table table-bordered">
<tr bgcolor=blue>
	<td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td>
</tr>
<tr>
	<td>
		<table align=center width=750 cellspacing=0 cellpadding=5>
			<tr>
	 
				<td align=center><a href=plist.php>Patients</a></td>
				<td align=center><a href=alist.php>Appointments</a></td>
			</tr>
		</table>
	</td>
</tr>
<tr bgcolor#045FB4>
	<td ><font size=4 color=white>New Patient</font></td>
</tr>
<form name=fdadd method=post action=psave.php>
<tr>
	<td>
		<table width=750 cellspacing=0 cellpadding=5>
			<tr>
				<td>patient Name</td>
				<td><input type=text name=name size=30 maxlength=30></td>
			</tr>
			<tr>
				<td>Sex</td>
				<td><input type=text name=sex size=30 maxlength=30></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type=text name=addr size=30 maxlength=30></td>
			</tr>
			<tr>
				<td>Disease</td>
				<td><input type=text name=disease size=30 maxlength=30></td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td align=center><input type=submit value=Submit></td>
</tr>
</form>
</table>
</body>
</html>