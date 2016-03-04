<?php include 'includes/header.php'; ?>
<script type="text/javascript">
	//javascript to make dynamic pages
	var index = 1;
	//txtValue to store the text of the textbox
	var txtValue ="";
	//boolean value stores true or false, if form has any validation error it returns 0, which is false
	var booleanValue = 0;
	//functions to change the text in the webpage
	function onFocus(x)
	{
		//alert("errrr");
		lastText = x.value;
		x.value = "";
	}

	//function onblur to validate empty textfield
	function onBlur(x)
	{
		//if a user enters nothing then it reset the same values, as well as change the  border color to red for warning
		if (x.value == '')
		{
			x.value = lastText;
			x.style.border = "1px red solid";
			booleanValue = 0;
		}
		else
		{
			x.style.border = "1px grey solid";
			booleanValue = 1;
		}
	 }

	function emailValidate(x)
	{
		if ((x.value != null || x.value != '') && x.value != 'Email')
		{
		//validate the email address
		//alert("Not a valid e-mail address");
		var y = x.value;
	    var atpos = y.indexOf("@");
	    var dotpos = y.lastIndexOf(".");
		    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=y.length)
		     {
		        //alert("Not a valid e-mail address");
		        //return false;
		        x.style.border = "1px red solid";
		        x.value = 'Please Enter a valid email address';
		        booleanValue = 0;
		    }
		    else
		    	booleanValue = 1;
		}
		//if user enter wrong information then it gives an error
	}

	function  checkOnSubmit()
	{
		if (booleanValue == 0)
			return false;
		return true;
	}
</script>

<div class = "logindiv">
	<form  name ="signup" method = "post" action="welcome.php" onsubmit = "return checkOnSubmit()" >
		<input onfocus = "onFocus(this)" onblur = "onBlur(this)" type = "text" id = "firstname" name = "firstname" value = "First name"/><br/>
		<input onfocus = "onFocus(this)" onblur = "onBlur(this)" type = "text"  id = "lastname"name = "lastname" value = "Last name"/><br/>
		<input onfocus = "onFocus(this)" onblur = "onBlur(this)" type = "text"  id = "dateofbirth"name = "dateofbirth" value = "BirthDate"/><br/>
		<input onfocus = "onFocus(this)" onblur = "onBlur(this)" type = "text"  id = "country"name = "country" value = "country"/><br/>
		<input onfocus = "onFocus(this)" onblur = "onBlur(this);emailValidate(this)" type = "text" id = "email" name = "email" value = "Email" /><br/>
		<input onfocus = "onFocus(this)" onblur = "onBlur(this)" type = "password"  id = "password"name = "password" value = "Password"/><br/>
		<input onclick="validation()" id = "btn" type = "submit">
	</form>
</div>
<!--content div close here-->

<?php include 'includes/footer.php';?>