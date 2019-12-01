<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<center><h1>FAQ</h1></center>
<br>
<div style="margin-left: 50px">
<h4>Que - How to cast Vote ?</h4>
<h4>Ans - First you have to register second you have to login then cast your Vote .</h4>
<br>
<h4>Que - How many times one can Vote ?</h4>
<h4>Ans - One can Vote only once .</h4>
<br>
<h4>Que - Who can add candidates ?</h4>
<h4>Ans - Only Admin can  add candidates .</h4>
<br>
<h4>Que - Is there any charge for using Online Voting system  ? </h4>
<h4>Ans - No there are no charges for usign online Voting System .</h4>
<br>
<h4>Que - How can I know my Vote has gone to the person whom I casted Vote  ? </h4>
<h4>Ans - You can see it in your option named Profile after you login . </h4>
</div>
