<?php
$fid=$_POST['sub'];
session_start();
if (!isset($_SESSION['username'])) {
	 header("location:logout.php");
}
$_SESSION['fid']=$fid;
require 'connection.php';
$conn    = Connect();
$query = ("SELECT * FROM fdetails WHERE fid='$fid'");

$numrows = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($numrows);
?>
<html>
<style type="text/css">
	.first{
		width: 1600px;
		height: 80px;
		
		display: inline-block;
		align-items: center;
	}
	b{
       font-size: 60px;
       color: rgb(244, 146, 65);
       align-self: center;
    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000; 
    padding-left: 300px;
    padding-top: 150px;
	}
	body{
	
		background-color: pink;
		
	}
	.main{
		margin-left: 400px;
		background-color: rgba(223, 244, 65,0.8);
		height: 610px;
		width:600px;
		margin-top: 20px;
		font-family: georgia;
		font-weight: bolder;
		border-radius: 10px;

	}
	.main:hover{
		background-color: rgba(223, 244, 65,1);
	}
	.submit{
		width:500px;
		height:70px;
		background-color: red;
		font-size: 20px;
		font-weight: bold;

	}
	.submit:hover{
		background-color: blue;
	}
</style>
<body>
    <div class="first">
    	<b >FLIGHT BOOKING DETAILS</b>
    </div>
    <div class="main" >
    <form action="etikk.php">
	<table style="width: 600px;height: 600px;padding: 5px;font-size: 20px;  font-weight:bolder;">
		<tr>
			<td colspan="3" style="text-align: center; font-size: 25px;">NAME :<?php echo $_SESSION['username']; ?> </td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center;"">DATE OF FLIGHT :<?php echo $_SESSION['dd']; ?></td>
		</tr>
		<tr>
			<td style="text-align: center;">ADULTS :<?php echo $_SESSION['adult']; ?></td>
			<td style="text-align: center">INFANTS :<?php echo $_SESSION['inf']; ?></td>
			<td style="text-align: center">CHILDREN :<?php echo $_SESSION['child']; ?></td>
		</tr>
		
		<tr>
			<td colspan="3" style="text-align: center;">FLIGHT NUMBER :<?php echo $fid; ?></td>
		</tr>
		<tr>
			<td  style="text-align: right;">DEPART TIME <?php echo $row['fstime'];?> </td>
			<td><pre>    </pre></td>
			<td  style="text-align: left">ARRIVAL TIME <?php echo $row['fdtime'];?></td>
		</tr>
		<tr>
			<td colspan="6" style="text-align: center;">
			JOURNEY :
			<?php echo $row['fsource']." to ".$row['fdest']; ?>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center;">FLIGHT TOTAL FARE :
				<?php
				$fare=$row['price']*($_SESSION['adult']+$_SESSION['child'])+$_SESSION['child']*$row['price']*0.1;
				echo $fare;
				?> 
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center;">
			<input type="submit" class="submit" value="PAY NOW">
			</td>
		</tr>
	</table>
	</form>
	</div>
</body>
<style type="css">
	table{
		margin-top: 100px;
		margin-left: 300px;
        width: 600px;
        height: 800px;
        padding: 5px;
        font-size: 30px;
	}
</style>
</html>
