<?php
require 'connection.php';
$conn    = Connect();
session_start();
if (!isset($_SESSION['username'])) {
	 header("location:logout.php");
}
$sql="INSERT into booking values ('".$_SESSION['username'].$_SESSION['fid'].$_SESSION['dd'] ."','".$_SESSION['fid']."','".$_SESSION['dd']."',".$_SESSION['nop'].");";
if(mysqli_query($conn, $sql))
	echo "done";
else
	echo "string";

mysqli_close($conn);
?>
<html>
<head>
<style>
	tr,td {border:2px solid black;}
	div {background-image: url('pic1.jpg');}
</style>
</head>
<body>
<?php
$from=$_SESSION['from'];
$to=$_SESSION['to'];
$name=$_SESSION['username'];
$date= $_SESSION['dd'];
$Fno= $_SESSION['fid'];
$Gateno=4;
?>
 <a href="logout.php"><button>LOG OUT </button></a>
  <a href="booking.php"><button> MY BOOKINGS</button></a>
<div style="border:2px solid black" height="3000">
<br>
<h1 style="text-align:center; color:#331a00;"><u>E-Ticket</u></h1>
<br/>
<br/>
<table align= "center" width="900" cellpadding="30">
<tr>
	<td width="450" height="200" bgcolor="white"> <h4> From: <h1><?php echo $from ?></h1> </h4>  </td>
	<td width="450" height="200" bgcolor="white"> <h4> To: <h1><?php echo $to ?></h1> </h4> </td>
</tr>
</table>

<br/>
<br/>
<h2>
<pre>
		     Passenger details:			
</pre></h2>
<h3>
<pre>
			   Name: <?php echo $name ?>
			   
			   Date: <?php echo $date ?>
			   
			   Flight no: <?php echo $Fno ?>
			   
			   Gate No: <?php echo $Gateno ?>
</pre>
</h3>
<div style="text-align:center;">
<button onclick="myFunction()" >Print</button>
<br>
<br>
<form action="ee.php" method="post">
<input type="submit" value="Email E-Ticket">
</form>

</div>
<br>
<script>
function myFunction() {
	
    window.print();
}
</script>
<br>
</div>
</body>
</html>