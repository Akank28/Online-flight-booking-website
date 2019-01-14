<?php
require 'connection.php';
$conn    = Connect();
session_start();
if (!isset($_SESSION['username'])) {
	 header("location:logout.php");
}
$sql="INSERT into booking values ('".$_SESSION['username']."','".$_SESSION['fid']."','".$_SESSION['dd']."',".$_SESSION['nop'].");";
if(mysqli_query($conn, $sql))
		{
			echo "booked successfully";
		}
else
{
	echo "not booked";
}
mysqli_close($conn);
?>