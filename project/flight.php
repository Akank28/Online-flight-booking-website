<?php

session_start();
if (!isset($_SESSION['username'])) {
     header("location:logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>flight booking</title>
</head>
<style type="text/css">
	body{
		
		background-color: rgb(244, 66, 197);
		display: inline-flex;

	}
	.main{
		margin-left: 120px;
		margin-top: 40px;
		background-color: rgb(65, 178, 244);
		width: 960px;
		height: 600px;
        text-align: center;
        align-content: center;
        box-shadow: 7px 7px  4px black;
        border-radius: 12px;
        display: block;
        
         

	}
	table{
		padding:10px;
		color: red;
		font-weight: bold;
		margin-left:100px;
		margin-right: 40px;
	}
	td,tr{
		padding: 15px;
	}
	td{
		width:300px;
		text-align: center;
	}
	select{
		font-size: 15px;
	}
	option{
		padding:4px;
	}
	.submit{
		width:500px;
		height:70px;
		background-color: red;
		font-size: 20px;
		font-weight: bold;

	}
	button{
		width:300px;
		height:100px;
		background-color: rgb(65, 244, 151);
		font-size: 20px;
		font-weight: bold;
		margin-top: 30px;

	}
	button:hover{
          background-color:rgb(157, 244, 65);
	}
	.but{
		display: block;
		margin-left: 100px;
		margin-top: 150px;
	}
	.submit:hover{
		background-color: orange;
	}
	.in:hover,.inp:hover{
		border-color: red;
		background-color: white;
		border-width: 3px;
		
	}
	.in,.inp{
		background-color: white;
		width:450px;
		height:35px;
	}
	select{
		background-color: white;
		width: 220px;
		height: 30px;

	}
	select:hover{
		border-color: red;
		background-color: white;
		border-width: 3px;
	}
	
	#d1,#d2{
		font-size: 20px;
	}
	b{
         
    color: white;
    text-shadow:
    -1px -1px 0 #000,
    1px -1px 0 #000,
    -1px 1px 0 #000,
    1px 1px 0 #000;  

	}



</style>

<script type="text/javascript">

   
</script>
<body>
<div class="main">
<b style="font-size: 50px; text-align: center; color: red">Book Your Flight</b>	
<form action="back.php" method="post">
<table>
	<tr>
		
		<td >
		    SOURCE
			<select  name="from"  tabindex="1" placeholder="FROM CITY" id="from" class="in" required="required" >
			<?php
			     require 'connection.php';
                 $conn    = Connect();
                 $query  ="select * from city order by cname;";
                 $numrows = mysqli_query($conn,$query);
                 while ( $row=mysqli_fetch_assoc($numrows)) {
                 echo "<option value=".$row['id']." value=\"from\">".$row['cname']."</option>";
                 }
                 
			?>
			</select>
		</td>
	</tr>
	<tr>
		
		<td>
		    DESTINATION
			<select name="to" tabindex="2" placeholder="TO CITY" id="to" class="in" required="required" >
			<?php
			     
                 $query  ="select * from city order by cname";
                 $numrows = mysqli_query($conn,$query);
                 while ( $row=mysqli_fetch_assoc($numrows)) {
                 echo "<option value=".$row['id'].">".$row['cname']."</option>";
                 }
                 $conn->close();
            ?>
			</select>
		</td>
	</tr>
	<tr>
		
		<td>
		    DEPART DATE
			<input type="date" tabindex="3" placeholder="DEPART DATE" id="d1" name="d1" class="inp" required="required" min="2017-10-31">
			
		</td>
	</tr>
	
	<tr>
	<td>
		<select id="adult" name="adult" required="required">
		    <option>adult(12+ years)</option>
		    <option>0</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
		</select>
		<select id="child" name="child" required="required">
			<option>children(2-12 years)</option>
			 <option>0</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
		</select>
		<br>
		<br>
		<select id="infant" name="infant" required="required">
		    <option>infant(0-2 years)</option>
		     <option>0</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			
		</select>
	</td>
	</tr>
	<tr>
		
		<td>
			<select id="class" name="class" required="required">
			<option>
				-----class-----
			</option>
				<option>
					economy
				</option>
				<option>
					business
				</option>
				<option>
					first class
				</option>
			</select>
		</td>
	</tr>
	<tr>
	<td  align="centre">
		<input type="submit" class="submit" value="Get Set Go">
	</td>
	</tr>
</table>
</form>

</div>
<div class="but">
	<a href="logout.php"><button>LOG OUT </button></a>
	<a href="booking.php"><button> MY BOOKINGS</button></a>
</div>

</body>
</html>