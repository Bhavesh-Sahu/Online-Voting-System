<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br>

<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<center><h3 style="color: orange;background-color: green" class="container shadow"> Change Password</h3></center>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  

<form action="change_pass_action.php" method="post" id="myform" class="container shadow" style="height: 300px">
	<br>

<label style="color: orange ;font-weight: bold;margin-left: 400px">Current Password :</label>
<input type="password" name="cpassword" value=""  >
<br>
<br>

<label style="color: orange ;font-weight: bold;margin-left: 400px">New Password:</label>
<input type="password" name="npassword" value="" >
<br>

<br>
<label style="color: orange ;font-weight: bold;margin-left: 400px">Confirm New Password:</label>

<input type="password" name="cnpassword" value="" >
<br>
<br>

<input type="submit" class="btn btn-success" name="cpass" value="UPDATE"  style="margin-left: 450px;margin-top: 30px; padding: 10px 50px">
</form>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
<?php include "footer.php";?>
