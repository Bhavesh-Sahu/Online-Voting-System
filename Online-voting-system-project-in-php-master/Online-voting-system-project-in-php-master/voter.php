<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>

<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>

<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3>Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" class="container shadow" style="height: 300px">
<br>
<center><font size='6'> VOTE your candidate: <br>


<?php
$con = mysqli_connect("localhost","root","","polltest") or die ("error" . mysqli_error($con));
if($con->connect_error){
	die("Connection failed:".$con->connect_error);
}
$sql="SELECT fullname FROM languages";
$result = $con->query($sql);
if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo "<input type='radio' name='lan' value='". $row["fullname"]. "'>" .$row["fullname"]. "<br>";
	}
}else{
	echo "NO PARTIES";
}
$con->close();
?>

</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>

<center><input type="submit" class="btn btn-success" name="submit"  value="Submit Vote" style="margin-left: 50px;padding: 10px 50px;margin-top: 30px"></center>
</form>
