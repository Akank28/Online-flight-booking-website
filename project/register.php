<?php
	$u=$_POST['rid'];
	$p=$_POST['rpw'];
	$cp=$_POST['cpw'];
	session_start();

	include('./connect.php');
	if($p==$cp){
		$sql="Insert into customer values ('".$u."','".md5($p)."');";

		if(mysqli_query($conn, $sql))
		{
			$_SESSION['username']=strtoupper($u);
	        $_SESSION['password']=md5($p);
	        header("location:flight.php");
		}
	}
	else {
		session_unset();
		$_SESSION["error2"]="true";
		header("location:index.php");
	}
	mysqli_close($conn);
?>