<html>
 <head>
   <title>Modify Doctor Profile</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 </head> 
 <body>
<table class="table table-bordered">
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr>
	<td align=center><a href=dlist.php>Doctors</a></td>
	
	<td align=center><a href=alist.php>Appointments</a></td>
</tr>
</table>
</td>
</tr>
<?php
require('connection.php');
error_reporting(1);
$rno=trim($_GET["rno"]);
$rs1=mysqli_query($con,"SELECT * from doct where dno='".$rno."'");
$sno=1;
while( $row=mysqli_fetch_array($rs1)) {
 echo "<tr bgcolor==#045FB4><td ><font size=4 color=white>Edit Doctor
Details</font></td></tr>";
 echo "<form name=fdmod method=post action=dupdate.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Doctor Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$row[1]."'></td></tr>";
 echo "<tr><td>Specilization</td><td><input type=text name=spec
size=30 maxlength=30  value='".$row[2]."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td colspan=2 align=center><input type=hidden name=rno value=".$rno."><input type=submit value=Submit></td></tr>";
 echo "</form>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table>
</body>
</html> 