<?php 
if(!isset($_SESSION)) {
session_start();
}

/*if (isset($_SESSION['SESS_NAME'])!="") 
{
	header("Location: adminmainpage.php");
}*/
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>

<br>
<br>
<center>
<h1 style="color: orange; background-color: green" class="container shadow"> Add Candidate </h1></center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform"  class="container shadow" style="height: 400px;margin-top: 40px">

<br>
<div style="margin-top: 100px">
	
</div>
<label style="color: orange ;font-weight: bold">Candidate-id :</label>
<input type="text" name="username" />

<br>
<br>
<label style="color: orange ;font-weight: bold">Fullname :</label>
<input type="text" name="firstname"  />
<br>
<br>
 <label style="color: orange ;font-weight: bold">party :</label>
<input type="text" name="lastname"  />
<br>
 
<br>
<input type="submit" name="submit" value="ADD" class="btn btn-success" />
</form>
</font>
</center>


