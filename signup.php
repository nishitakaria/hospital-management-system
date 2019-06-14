<html>
<head> 
<script>
			function validate()
			{
				var status=true;
				var letters=/^[A-Za-z]{6,15}$/;
				var name = document.forms["myForm"]["Firstname"].value;
				var radios = document.getElementsByName("gender");
    			var formValid = false;
				var i = 0;
				var z = document.forms["myForm"]["phoneno"].value;
				var x = document.forms["myForm"]["email"].value; 
   				var atpos = x.indexOf("@");
				var dotpos = x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
				 {
					alert("Not a valid e-mail address");
					status=false;
				 }
				 if(!x.match(letters))
				 {
				 	alert("First name must have characters only");
				 	verify=false;
				 }
   				 if(!z.match(/^\d+/))
        		 {
        				alert("For phone no.,please enter numeric characters only");
        				status=false;
       			 }
       			if (z.length < 10 || z.length > 10) {
            			alert("Please enter a valid phone number.");
            			status=false;
            		} 
    				while (!formValid && i < radios.length) 
    				{
        				if (radios[i].checked) formValid = true;
        				i++;        
    				}
				if (!formValid){ alert("Must select gender");
				status=false;} 
    					 
				if(name==null || name=="")
				{
				alert("Name cannot be blank");
				status=false;
			 	}
			 	if(myForm.password.value != "" && myForm.password.value == myForm.confirmp.value) 
				{ 
					if(myForm.password.value.length < 6) 
					{ 
						alert("Error: Password must contain at least six characters!");
						status=false;
						 myForm.password.focus();
  							return false;
   					} 
   
        			re = /[0-9]/;
         			if(!re.test(myForm.password.value)) 
         			{ alert("Error: password must contain at least one number (0-9)!");
         		status=false;
          			myForm.password.focus();
          			 return false;
         			   } 
          				  re = /[a-z]/;
           				  if(!re.test(myForm.password.value)) 
            		 { 
            		 alert("Error: password must contain at least one lowercase letter (a-z)!"); 
            		 status=false;
            		 myForm.password.focus();
             		 return false;
              		 } 
             		  re = /[A-Z]/;
              		  if(!re.test(myForm.password.value)) 
              		 { 
               			 alert("Error: password must contain at least one uppercase letter (A-Z)!");
               			 status=false;
               			 myForm.password.focus();
                 		 return false;
                  		 } 
                  	 }
                    else 
                    { 
                    alert("Error: Please check that you've entered and confirmed your password!"); 
                    status=false;
                   myForm.password.focus();
                     return false;
                      }
                        if(status == true)
                        {
                        	alert("Registered Successfully");
                        }

			 }		
				
			
		</script>

<link type="text/css" rel="stylesheet" href="signup.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<title> Register </title>
 <script src="signup.js"> </script>		
</head>
<body>
<h1> <a href="hm.php"> Saving Hands Hospital </a> </h1>
		
<div class="hospital">
<input type="button" class="submit1" value="login" />
		
			
			<div id="intro2" class="hospital">Create an account</div>
			
			<div id="intro3" class="hospital">It's free and always will be.</div>
			<div id="form3" class="hospital">
			
			<form name="myForm" method="post" onsubmit="return validate(this);" action="sid.php" >
			
				<input placeholder="First Name" type="text" id="namebox" name="Firstname" />
				<input placeholder="Last Name" type="text" id="namebox"  name="Lastname"/> <br>
				<input placeholder="Phone No." type="text" id="mailbox"  name="phoneno"/> <br>
				<input placeholder="Email" type="text" id="mailbox" name="email" /><br>
				<input placeholder="Password" type="password" id="mailbox" name="password" /><br>
				<input placeholder="Re-enter password" type="password" id="mailbox" name="confirmp" /><br>
				<input type="date" placeholder="D.O.B" name="dob" id="namebox"  /><br><br>
				<input type="radio" id="r-b" name="gender" value="male" />Male
				<input type="radio" id="r-b" name="gender" value="female" />Female<br><br>
			<input type="checkbox" name="vehicle" value="Bike"> Agree Terms And Conditions<br>
			<br>	<input name="submit" type="submit"  value="submit" /><br>

			</div>
				</form>
			 
			
			
</body>

</html>

