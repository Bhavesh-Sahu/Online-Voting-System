<?php

session_start();
if(!isset($_SESSION['user'])){
	header('location: adminlogin.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'link.php'?>
</head>
<body class="adbg">
	<div > 
		<div class ="heading text-center text-uppercase text-black container shadow" style="background-color: orange; margin-top: 50px">
			<h1 style="color: green">ADMIN PAGE</h1>
		</div>
		<br><br>
	</div>
	
		<div style="margin-top: 50px">
			<a href="lan_view.php"  class="btn btn-danger" style="margin-left:130px ; padding: 60px 50px;
			border-radius: 30%"> <h4>See result</h4></a>
			<a href="deletecand.php"  class="btn btn-danger" style="margin-left:100px; padding: 60px 50px;
			border-radius: 30%"> <h4>Delete Candidates</h4> </a>

			<a href="addcand.php" class="btn btn-danger" style="margin-left:100px; padding: 60px 50px;
			border-radius: 30%"> <h4>Add candidate</h4></a>
			
			<a href="logout.php" class="btn btn-danger"style="margin-left:100px; padding: 60px 50px;
			border-radius: 30%"><h4>Logout </h4></a>	
		</div>
		

  


</body>
</html>