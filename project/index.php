<?php
    

	session_start();


?>
<html>
<head>
	<title>LOGIN</title>
	<style type="text/css">
		#box{
			box-shadow: 1px 1px 18px #6b86aa;
			width: 500px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 90px;
			border-radius: 5px;
			padding: 6px;
			color:rgb(37, 65, 150);
			background-color: rgba(232, 232, 237,0.6);

		}
		p{
			color:red;
			font-style: italic;;
			font-size: 12px;
		}
		#box:hover{
           background-color: rgba(232, 232, 237,0.9);
           transition: 0.4s;

		}
		input:hover{
               border:3px solid red ;
		}
		button{
			
			width: 48.8%;
			padding: 8px;
			background-color:white; /* Green */
		    border-style: solid;
		    border-color: #026afc;
		    text-align: center;
		    color:black;
		    display: inline-block;
		    font-size: 26px;
		    margin: 4px 2px;
		    transition-duration: 0.2s;
		    cursor: pointer;
		}
		hr{
			
			border-width: 3px;
			border-style: solid;
		}
		button:hover {
		    background-color: #287bef;
		    color: white;
		}
		input{
			width: 96.5%;
			font-size: 20px;
			margin-top: 12px;
			padding: 8px;
			border-radius: 0px;
			border: 1px solid grey;
		}
		h1{
			text-align: center;
			margin: 5px;
			font-size: 45px;
			font-family: Arial, Helvetica, sans-serif;
		}
		#fill{
			width: 100%;
			border: none;
			background-color: rgb(75, 140, 244);
			color:white;
		}
		#fill:hover{
			transition-duration: 0.4s;
			background-color: rgb(57, 107, 186);
		}
		#tick
		{
			margin-top: %;
		}
		body{
			background-color: rgb(188, 201, 219);
			background-image: url(https://static.pexels.com/photos/133953/pexels-photo-133953.jpeg);
			background-repeat: no-repeat;
			
		}
	</style>
	
</head>

<body>
	<div id="box">
		<button onclick="change(1)">LOGIN</button>
		<button onclick="change(0)">SIGN UP</button>
		<hr>
		<div id="inner-box">
			<form id="login" method="post" action="./login.php">
				<h1>LOGIN</h1>
				<input type="text" name="uid" placeholder="USERNAME" required="required" >
				<input type="password" name="upw" placeholder="PASSWORD" required="required">
				<p id="wuid"></p>
				<input type="submit" id="fill" value="LOGIN">
			</form>
			<form id="sign" method="post" action="./register.php">
				<h1>SIGN UP</h1>
				<input type="text" name="rid" placeholder="USERNAME" required="required" onkeyup="valid()">
				<p id="wid"></p>
				<input type="password" name="rpw" placeholder="PASSWORD" required="required">
				<input type="password" name="cpw" placeholder="CONFIRM PASSWORD" required="required" onkeyup="valid()">
				<p id="tick"></p>
				<p id="wp"></p>
				<input type="submit" id="fill" class="sfill" value="CREATE YOUR ACCOUNT">
			</form>
		</div>
		
	</div>

</body>

	<script type="text/javascript">
		
		function change(v){
			document.getElementById("sign").style.display="none";
			document.getElementById("login").style.display="none";

			if(v==1)
			document.getElementById("login").style.display="block";
			else
				document.getElementById("sign").style.display="block";
		}
		
		 function valid(){
		 	
		 		var u=document.getElementsByName("rid")[0].value;
			 	var p=document.getElementsByName("rpw")[0].value;
			 	var cp=document.getElementsByName("cpw")[0].value;

			 	if(u.length>0)
			 	{
			 		var pat=/^[a-z0-9@.]*$/i;
			 		if(!pat.test(u))
			 			document.getElementById("wid").innerHTML="Only AlphaNumeric Allowed";
			 		else
			 			document.getElementById("wid").innerHTML="";

			 	}
			 	if(cp.length>0 && cp.length>=p.length	)
			 	{
			 		if(p!=cp)
			 			document.getElementById("wp").innerHTML="Password does not match";
			 		else

			 			document.getElementById("wp").innerHTML="";
			 	}
			 	
			 	

		 	

		 }
		 function msg(a)
		 {
		 	if(a==1)
		 		document.getElementById("wuid").innerHTML="Wrong Credentials";
		 	else
		 		document.getElementById("wp").innerHTML="Password didnt match";
		 }
	</script>
<?php
	if(isset($_SESSION["error2"]))
		echo "<script>change(2); msg(2);</script>";
	else if(isset($_SESSION["error1"]))
		echo "<script>change(1); msg(1);</script>";
	else
		echo "<script>change(1);</script>";
	session_unset();
?>

</html>