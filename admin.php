<?php require('connection.php');?>
<html>
<head>
	<style>
		h1{
			text-align: center;
			font-weight: bold;
			font-size: 20px;
		}
		th, td {
    padding: 8px;
    text-align: center;
     
}
button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 26px;
    margin: 4px 2px;
    cursor: pointer;
    width:25%;
}

		 
	</style>
	<title>admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body background="h25.jpg">
	 
	<h1><blockquote>WELCOME ADMIN</blockquote></h1><br><br><br>
	<table width="100%" text-align="center">
	<tr>
		<td><a href="plist.php"><button class="button button1">Patients</button></a></td>
		<td><a href="alist.php"><button class="button button1">Appointments</button></a></td>
	</tr>
	<tr>
		<td><a href="dlist.php"><button class="button button1">Doctors</button></a></td>
		<td><a href="salary.php"><button class="button button1">Salary Structure</button></a></td>
	</tr>
	</table>
</body>
</html>