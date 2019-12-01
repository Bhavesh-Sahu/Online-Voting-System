<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font color='#008000' size='18'>This is an online voting system allows registered users to vote to the party they want</p>
<p>In order to make a vote you have to register first and then login and vote</font></legend></center>
    
<?php include "footer.php";?>
