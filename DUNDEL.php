<html>
 <head>
  <title>Recover Doctor</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 </head> 
 <body>
<table class="table table-bordered">
<tr bgcolor=blue>
	<td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td></tr>
<tr><td>
<table align=center width=750 cellspacing=0 cellpadding=5>
	<tr>
		<td align=center><a href=dlist.php>Doctors</a></td>
	 
		<td align=center><a href=alist.php>Appointments</a></td>
	</tr>
</table></td></tr>
<tr bgcolor=#045FB4><td ><font size=4 color=white>Recover
Doctor</font></td></tr>

<?php
require('connection.php');
error_reporting(1);
$rno=$_GET["rno"];
 mysqli_query($con,"update doct set dshow='Y' where dno='$rno'");
 echo "<tr><td align=center><font size=4 color=green>SuccessfullyRecords Recovered</font></td></tr>";
echo "<tr><td align=center><a
href=dlist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>"; 