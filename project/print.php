<html>
<head>
<style>
	tr,td {border:2px solid black;}
</style>
</head>
<body>
<?php
$from="Chennai";
$to="Delhi";
$name="Ani";
$phone= 7550173290;
$date= "Today";
$Fno= "AirbusA380";
$Gateno=4;
?>
<div style="border:2px solid black" height="3000">
<br>
<h2 style="text-align:center;">E-Ticket</h2>
<br/>
<br/>
<table align= "center" width="900" cellpadding="30">
<tr>
	<td width="450" height="200"> <h2> From: <?php echo $from ?> </h2>  </td>
	<td width="450" height="200"> <h2> To: <?php echo $to ?> </h2> </td>
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
			   
			   Phone: <?php echo $phone ?>
			   
			   Date: <?php echo $date ?>
			   
			   Flight no: <?php echo $Fno ?>
			   
			   Gate No: <?php echo $Gateno ?>
</pre>
</h3>
<div style="text-align:center;">
<button onclick="myFunction()" >Print</button>
<br>
<br>
<form action="e1.php" method="post">
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