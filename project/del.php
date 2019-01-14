<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
require 'connection.php';
$conn    = Connect();
session_start();
if (!isset($_SESSION['username'])) {
     header("location:logout.php");
}
$sql="DELETE from booking WHERE username='".$b."';";
if(mysqli_query($conn, $sql))
		{
			echo "cancelled successfully";
		}
else
{
	echo "not cancelled";
}
mysqli_close($conn);
?>