<?php
if(!isset($_SESSION)) { 
session_start();
}

?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<div style="margin-top: 30px">
</div>
<center><h1 style="color: orange; background-color: green" class="container shadow"> Voting So Far  </h1></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
?>

<?php
if(isset($_SESSION['success']) && $_SESSION['success']!='')
{
	echo "<h2>".$_SESSION['success'].'</h2>';
	unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status']!='')
{
	echo "<h2>".$_SESSION['status'].'</h2>';
	unset($_SESSION['status']);

}
?>

<div style="margin-top: 80px">
	
</div>

<table class="table table-bordered container shadow"  cellspacing="0" border="1" style="width: 70%; margin-left: 230px;border: 3px solid black ; text-align: center;"> 
	<thead>
		<tr>
			<th style="color: #4682B4; border: 3px solid black">id</th>
			<th style="color: #4682B4; border: 3px solid black">name</th>
			<th style="color: #4682B4; border: 3px solid black">about</th>
			<th style="color: #4682B4; border: 3px solid black">vote</th>
			
			<th style="color: #4682B4; border: 3px solid black">delete</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
	if (mysqli_num_rows($member)> 0 ) {
	while($row=mysqli_fetch_assoc($member))
	{
	?>
	<tr>
		<td style=" border: 3px solid black"> <?php echo $row['lan_id']; ?> </td>
		<td style=" border: 3px solid black"> <?php echo $row['fullname']; ?> </td>
		<td style=" border: 3px solid black"> <?php echo $row['about']; ?> </td>
		<td style=" border: 3px solid black"> <?php echo $row['votecount']; ?> </td>
	<td style= "border: 3px solid black">
		<form action="code.php" method="post">
			<input type="hidden" name="delete_id" value="<?php echo $row['lan_id'];?>">
			<button type="submit" name="delete_btn" class="btn" style=" color: #800000	; background-color:#FA8072;  ">delete</button>
			
		</form>
	</td>
	</tr>

<?php
	}
}
?>
</tbody>
</table>
