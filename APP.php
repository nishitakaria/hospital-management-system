<?php require('connection.php');?>
<html>
 <head>
  <title>Add Appointments</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 </head> 
 <body>
<table class="table table-bordered">
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr> 
 <td align=center><a href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=#045FB4<td ><font size=4 color=white>Add Appointments</font></td></tr>
<form name=fdadd method=post action=asave.php>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr><td>Patient Id</td><td><select name=pat style="width:230px">
<?php


$rs1=mysqli_query($con,"SELECT * from patient where pshow='Y' order by
pname;");
$sno=1;
?>
<option selected="selected" disabled="disabled">Patient Id</option>
<?php
while( $row=mysqli_fetch_array($rs1)) {
 $patient_id=$row[0];
 $patient=$row[1];
 ?>
	<option value="<?php echo $patient_id ?>"><?php echo $patient_id."  :  ".$patient ?></option>
 <?php
 $sno++;
}
?>
</select>
</td></tr>
<tr><td>Doctor Id</td><td><select name=doc style="width:230px">
<option selected="selected" disabled="disabled">Doctor Id</option>
<?php

$rs2=mysqli_query($con,"SELECT * from registration;");
$sno=1;
while($row1=mysqli_fetch_array($rs2)) {
 $doctor_id=$row1[0];
 $doctor=$row1[1];
 ?>
	<option value="<?php echo $doctor_id ?>"><?php echo $doctor_id."  :  ".$doctor ?></option>
 <?php
 $sno++;
}
?>
</select>
</td></tr>
<tr><td>Time</td><td><input type=text name=tim placeholder="hh:mm" size=30
maxlength=30></td></tr>
<tr><td>Date</td><td><input type=text name=dat placeholder="yy/dd/mm" size=30
maxlength=30></td></tr>
</table></td></tr>
<tr><td align=center><input type=submit value=Submit></td></tr>
</form>
</table>
</body>
</html>