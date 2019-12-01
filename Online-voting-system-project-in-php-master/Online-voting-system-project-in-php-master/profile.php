<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>

<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'link.php'?>
<center><h1 style="margin-top: 40px"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h1></center>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        
        echo "<br><h3 style='text-align: center'>You have voted for: " . " " . $row['voted']."</h3>";
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
}
?>