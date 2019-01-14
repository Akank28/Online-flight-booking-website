<?php
session_start();

$to = "anuroopkhandelwal33@gmail.com";
$subject = "Flight Cofirmation";

$message = '<html>
<head>
<style>
	tr,td {border:2px solid black;}
	div {background-color: blue;}
</style>
</head>
<body>
<?php
$from='.$_SESSION['from'].';
$to='.$_SESSION['to'].';
$mid='.$_SESSION['middle'].';
$name='.$_SESSION['username'].';
$date= '.$_SESSION['dd'].';
$Fno= '.$_SESSION['fid'].';
$Fno2= '.$_SESSION['fid2'].';
$Gateno=4;
?>
<div style="border:2px solid black" height="3000">
<br>
<h1 style="text-align:center; color:#331a00;"><u>E-Ticket</u></h1>
<br/>
<br/>
<table align= "center" width="900" cellpadding="30">
<tr>
	<td width="450" height="200" bgcolor="white"> <h4> From: <h1><?php echo $from ?></h1> </h4>  </td>
	<td width="450" height="200" bgcolor="white"> <h4> To: <h1><?php echo $mid ?></h1> </h4> </td>
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

<br>
</div>
</body>
</html>
';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <4offer26@gmail.com>' . "\r\n";

if(mail($to,$subject,$message,$headers))
{	
	header('Location: ./etik.php');
	exit();
}
?>