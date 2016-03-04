<?php include 'includes/header.php'; ?>
<!--Contact us from include cantact information-->
<div ng-view></div>
<form name= "contactus"  >
<label >First Name</label><input type="text" name = "firstname"/>
<label>Last Name</label><input type="text" name = "lastname"/>
<label>Phone </label><input type="text" name = "phone"/>
<label>Email</label><input type = "type" name = "email" />
<input  class = "submit" type = "submit" name="submit" value = "Submit"/>
<input type = "button" name = "cancel" value= "Cancel">
</form>
<?php include 'includes/footer.php';?>