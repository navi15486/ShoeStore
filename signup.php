<?php// include 'includes/header.php'; ?>
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

<div></div>
	<h2>Sign up to get exclusive offer</h2>
    <form class="form-horizontal" onsubmit="return validation()" method = "post" action="welcome.php">
       
        <div class="form-group" id="firstnameError">
            <label class="col-sm-3 control-label" for="inputWarning"  >FirstName</label>
            <div class="col-sm-3">
                <input type="text" id="firstname" class="form-control" placeholder="Firstname" name="firstname" required>
                <span class="help-block" id = "firstname-help-block" style="visibility: hidden;">*Firstname Field is empty</span>
            </div>
        </div>
        <div class="form-group" id="lastnameError">
            <label class="col-sm-3 control-label" for="inputWarning"  >LastName</label>
            <div class="col-sm-3">
                <input type="text" id="lastname" class="form-control" name = "lastname" placeholder="Lastname" required>
                <span class="help-block" id = "lastname-help-block" style="visibility: hidden;">*Lastname Field is empty</span>
            </div>
        </div>
        <div class="form-group" id="emailError">
            <label class="col-sm-3 control-label" for="inputWarning"  >Email </label>
            <div class="col-sm-3">
                <input type="text" id="email" class="form-control" name = "email" placeholder="Email" required>
                <span class="help-block" id = "password-help-block" style="visibility: hidden;">*Email Field is empty</span>
            </div>
        </div>
         <div class="form-group" id = "usernameError">
            <label class="col-sm-3 control-label " for="inputSuccess"  >Username</label>
            <div class="col-sm-3">
                <input type="text"   class="form-control" placeholder="Username" id="username" name="username" required>
                <span class="help-block" id = "user-help-block" style="visibility: hidden;">*Username Field is empty</span>
            </div>
        </div>
        <div class="form-group" id="passwordError">
            <label class="col-sm-3 control-label" for="inputWarning"  >Password</label>
            <div class="col-sm-3">
                <input type="password" id="password" class="form-control" name = "password" placeholder="Password" required>
                <span class="help-block" id = "password-help-block" style="visibility: hidden;">*Password Field is empty</span>
            </div>
        </div>
        <div class="form-group" id="passwordError">
            <label class="col-sm-3 control-label" for="inputWarning" style="display:inline">ConfirmPassword</label>
            <div class="col-sm-3">
                <input type="password" id="confirmPassword" name= "confirmPassword" class="form-control" placeholder="Confirm Password">
                <span class="help-block" id = "password-help-block" style="visibility: hidden;">*Confirm password doesn't match</span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                <button   type="submit" class="btn btn-primary" name ="submit">Login</button>
            </div>
        </div>
    </form>


<?php //include 'includes/footer.php';?>