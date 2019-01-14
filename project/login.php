<?php
	$u=$_POST['uid'];
	$p=$_POST['upw'];
	session_start();

	include('connect.php');

	$sql="Select password from customer where username='".$u."';";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) ==1) 
	{
    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) 
	    {
	    	//echo $row['password']."<br>".$row['username']." ".md5($p)." ".$p;
        	if($row['password']==md5($p))
        	{
        		
        		$_SESSION['username']=strtoupper($u);
        		$_SESSION['password']=$p;
        		header("location:flight.php");
        	}
        	else 
	{
		session_unset();
		$_SESSION["error1"]="1";
	    header("location:index.php");
	}
    	}
	} 
	else 
	{
		session_unset();
		$_SESSION["error1"]="1";
	    header("location:index.php");
	}

	mysqli_close($conn);
?>