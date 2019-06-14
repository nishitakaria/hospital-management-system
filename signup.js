function validateForm()
{
	var x = document.forms["myForm"]["Firstname"].value;
	var y = document.forms["myForm"]["Lastname"].value;
	var p = document.forms["myForm"]["phone no."].value;
	var z = document.forms["myForm"]["email"].value;
	var a = document.forms["myForm"]["password"].value;
	var b = document.forms["myForm"]["pass2"].value;	
    	if (x == null || x == "" )
    	{
       		 alert("First name must be filled out");
       		 return false;
    	}
    	else if(y == null || y == "")
    	{
		alert("Last name must be filled out");
		return false;
	}
	if (p.length < 10 || p.length > 10) {
            			alert("Phone number should be 10 digits")
            			} 
	if(z == null || z == "")
	{
       		 alert("Email ID must be filled out");
       		 return false;
    	}
    	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))  
        {  
   		 return (true);
      	}  
      	else
      	{
   	 alert("You have entered an invalid email address!");  
   	 return (false);
	}
	
}
