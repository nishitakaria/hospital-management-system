<!DOCTYPE HTML>
<html>
<style>
body {
	background-image: url("hospital1.jpg");
	background-size:100%;
	background-repeat:no-repeat;
}
</style>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!--link href="css/style2.css" rel="stylesheet" type="text/css"  media="all" /-->

	<script>
			function validate()
			{
				var name = document.forms["myForm"]["name"].value;
				var feedback = document.forms["myForm"]["query"].value;
				var z = document.forms["myForm"]["number"].value;
				var x = document.forms["myForm"]["email"].value; 
   				var atpos = x.indexOf("@");
				var dotpos = x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
				 {
					alert("Not a valid e-mail address");
				 }
   				 if(!z.match(/^\d+/))
        			{
        				alert("For phone no.,please enter numeric characters only")
       				}
       				if (z.length < 10 || z.length > 10) {
            			alert("Please enter a valid phone number.")
            			} 
    				//while (!formValid && i < radios.length) 
    				//{
        			//	if (radios[i].checked) formValid = true;
        			//	i++;        
    				//}
				//if (!formValid) alert("Must select gender"); 
    					 
				if(name==null || name=="")
				{
				alert("Name cannot be blank");
				return true;
			}

				if(feedback==null || feedback=="")
				{
				alert("Please enter some feedback");
				return true;
 
 
		}  }		
				
			
		</script>
</head>
<body>
	<div class="container" style="text-align: center;">
		<h1><a href="hm.php" class="badge badge-light">Saving Hands Hospital</a></h1>
		<div style="padding: 30px;">
			<h2>Contact Us</h2>
			<form name="myForm" method="post" action="feedback.php" onsubmit="return validate(this);">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="form-group col-md-6">
						<input type="text" name="name" class="form-control " placeholder="Name">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="form-group col-md-6">
						<input type="email" name="email" class="form-control " placeholder="E-mail">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="form-group col-md-6">
						<input type="tel" name="number" class="form-control " placeholder="Mobile No.">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="form-group col-md-6">
						<textarea type="text" name="query" class="form-control " placeholder="Query"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group" style="margin: auto;">
						<input type="submit" name="contact" class="form-control btn btn-success" value="Submit" onclick="feedback.php">
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
		<div class="card col-md-6">
			<div class="card-header" style="font-weight: bold; font-size: 1.4em">
				Hospital Address
			</div>
			<div class="card-body">
				<blockquote class="blockquote mb-0">
					<p style="padding: 0; margin: 0">157, Murphy Avenue</p>
					<p style="padding: 0; margin: 0">Sunnyvale, California-94086</p>
					<p style="padding: 0; margin: 0">United States.</p>
					<p style="padding: 0; margin: 0">Phone: (022) 222 666 444</p>
					<p style="padding: 0; margin: 0">Fax: (000) 222 463 567</p>
					<footer class="blockquote-footer">info@savinghandshospital.com</footer>
				</blockquote>
			</div>
		</div>
	</div>
</div>
	</body>
	</html>
