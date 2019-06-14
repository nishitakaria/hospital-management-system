<?php require('connection.php');?>
<html>
 <head>
  <title>Doctor Delete Records</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 </head> 
 <body>
<table class="table table-bordered">
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td></tr>
<tr><td>
<table align=center width=750 cellspacing=0 cellpadding=5>
<tr>
	 
	<td align=center><a href=plist.php>Doctors</a></td>
	<td align=center><a href=alist.php>Appointments</a></td>
</tr>
</table>
</td>
</tr>
<tr bgcolor=#045FB4><td ><font size=4 color=white>Doctor's
List</font></td></tr>
<tr><td><a href=padd.php>Add New Record</a></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Doctor's
Name</td><td align=center>Specialization</td><td
align=center>Options</td></tr>
<?php

$todel=$_GET['rno'];
mysqli_query($con,"update doct SET dshow='N' where dno='$todel' ;");

$rs1=mysqli_query($con,"SELECT * from doct where dshow='Y' order by
dname;");
$sno=1;
while( $row=mysqli_fetch_array($rs1)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a
href=dmod.php?rno=".$row[0].">Modify</a> | <a
href=ddel.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr bgcolor=#045FB4><td><font size=4 color=white>Deleted
Records</font></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>S No</td><td align=center>Doctor's
Name</td><td align=center>Specialization</td><td
align=center>Options</td></tr>
<?php
$rs2=mysqli_query($con,"SELECT * from doct where dshow='N' order by
dname;");
$sno=1;
while( $row=mysqli_fetch_array($rs2)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a
href=dundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr> 
</table>
</body>
</html> 