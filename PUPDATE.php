<?php require('connection.php');?>
<html>
 <head>
  <title>Update Patient</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 </head> 
 <body>
<table class="table table-bordered">
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>SAVING HANDS HOSPITAL</font></td></tr>
<tr><td>
<table align=center width=750 cellspacing=0 cellpadding=5>
<tr>
	<td align=center><a href=plist.php>Patients</a></td>
	<td align=center><a href=alist.php>Appointments</a></td>
</tr>
</table></td></tr>
<tr bgcolor=#045FB4><td ><font size=4 color=white>Update
patient</font></td></tr>
<?php

$rno=trim($_POST["rno"]);
$name=trim($_POST["name"]);
$addr=trim($_POST["addr"]);
$sex=trim($_POST["sex"]);
$disease=trim($_POST["disease"]);
$error=0; 
if ($name=="") { $error=1; echo "<tr><td><font color=red size=4>Please enter your name</font></td></tr>"; }
if ($addr=="") { $error=1; echo "<tr><td><font color=red size=4>Please enter your address</font></td></tr>"; }
if ($sex=="") { $error=1; echo "<tr><td><font color=red size=4>Please enter sex</font></td></tr>"; }
if ($disease=="") { $error=1; echo "<tr><td><font color=red size=4>Please enter your disease</font></td></tr>"; }
if ($error==0) 
{
 mysqli_query($con,"update patient set pname='".$name."',psex='".$sex."',paddr='".$addr."',disease='".$disease."'
where pno='".$rno."'");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Records Updated</font></td></tr>";
}
else {
 echo "<form name=fdadd method=post action=pupdate.php>";
 echo "<tr><td><table width=750 cellspacing=0 cellpadding=5>";
 echo "<tr><td>Doctor Name</td><td><input type=text name=name size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Address</td><td><input type=text name=spec size=30 maxlength=30 value='".$addr."'></td></tr>";
echo "<tr><td>Sex</td><td><input type=text name=spec  size=30 maxlength=30 value='".$sex."'></td></tr>";
echo "<tr><td>Disease</td><td><input type=text name=spec  size=30 maxlength=30 value='".$disease."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=hidden name=rno value=".$rno."><input type=submit value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=plist.php>Continue...</a></td></tr>";
echo "</table>"; 
echo "</body></html>";