<?php
if(!isset($_SESSION)) { 
session_start();
}

?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<div style="margin-top: 30px">
<center><h1 style="color: orange; background-color: green" class="container shadow"> Voting So Far  </h1></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<table
	class="table table-bordered container shadow"  cellspacing="0" border="1" style="width: 70%; margin-left: 230px;border: 3px solid black ; text-align: center; margin-top: 80px"><tr>
<td style="color: #4682B4; border: 3px solid black;font-weight: bold ">ID</td>		
<td style="color: #4682B4; border: 3px solid black; font-weight: bold">CANDIDATES</td>
<td style="color: #4682B4; border: 3px solid black; font-weight: bold">PARTY</td>
<td style="color: #4682B4; border: 3px solid black; font-weight: bold">VOTE</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			$about=$mb->about;
			$vote=$mb->votecount;
			echo '<tr >';
	echo '<td style=" border: 3px solid black">'.$id.'</td>';		
	echo '<td style=" border: 3px solid black">'.$name.'</td>';
	echo '<td style=" border: 3px solid black">'.$about.'</td>';
	echo '<td style=" border: 3px solid black">'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table>';
	}
?>