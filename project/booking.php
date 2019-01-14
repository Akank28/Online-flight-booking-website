<?php
require 'connection.php';
$conn    = Connect();
session_start();
$query = ("SELECT * FROM booking WHERE username LIKE '".$_SESSION['username']."%'");
$numrows = mysqli_query($conn,$query);
if (!isset($_SESSION['username'])) {
	 header("location:logout.php");
}
 

?>
<html>
<head>
	<title>Search</title>
</head>

<style type="text/css">
    .sort{
        margin-top: 10px;
        margin-left: 1150px;
        margin-bottom: 10px;
        display: inline-flex;
    }
    .s{
        margin: 2px;
        margin-left: 10px;
        background-color: rgb(215, 66, 244);
        width: 130px;
        height:40px;
       
    }
    .a{
    	background-color: #26c145;
    }
    body{
    	background-color: rgb(66, 152, 244);
    }
   

button{
  margin-right: 10px;
  margin-left: 10px;
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

</style>
<body>                      
                           <div class="sort">
                       
                           <a href="logout.php"><button class="a">LOG OUT </button></a>
                 
                            
                            </div>
                            <div>
                                
                            	<table >
                            	<thead>
                            	    <th>......</th>
                            		<th>Flight</th>
                            		<th>Date</th>
                            		<th>No Of Tickets</th>
                            		<th>Status</th>
                            	</thead>
                            	<tr>
                            	<?php
                            	 while ( $row=mysqli_fetch_assoc($numrows)) {
                            	 	if ($row['date']>=date('Y-m-d')) {
                            	 		
                            	 	
                 	?>
                 		         
                 		
                 				<tr> 

                          <?php if (substr($row['fid'], 0,1)=="i") {  ?>
                             <td><img src="https://upload.wikimedia.org/wikipedia/en/9/93/IndiGo_Logo.jpg" height="80px" width="80px"></td>
                          <?php }  
                          elseif (substr($row['fid'], 0,2)=="jl") {  ?>

                            <td><img src="http://www.delhicapital.com/images1/jetlite.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row['fid'], 0,2)=="ja") {  ?>

                            <td><img src="https://pbs.twimg.com/profile_images/876775499799736321/1nFK_O5O_400x400.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row['fid'], 0,2)=="ac") {  ?>

                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Air_Costa_Logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row['fid'], 0,2)=="ai") {  ?>

                            <td><img src="https://yadusingh.files.wordpress.com/2016/12/air-india-australia-logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row['fid'], 0,2)=="sj") {  ?>

                            <td><img src="http://www.afaqs.com/all/news/images/news_story_grfx/2015/06/44463/Spicejet-Old-Logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                          elseif (substr($row['fid'], 0,2)=="va") {  ?>

                            <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/bf/Vistara_logo.svg/1253px-Vistara_logo.svg.png" height="80px" width="80px"></td>
                            <?php
                          }
                          elseif (substr($row['fid'], 0,2)=="ga") {  ?>

                            <td><img src="https://2.bp.blogspot.com/-BGWl16apiQs/WDZb4RiCSGI/AAAAAAAATFQ/N2nZmsjsqdsUJHmJ4lnyW3aa31rPJ5v3QCLcB/s1600/GoAir%2BLogo.PNG" height="80px" width="80px"></td>
                            <?php
                          }
                          ?>


                                                       
                 					
                                    <td><?php echo $row['fid']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['nop']; ?></td>
                                    <form action="del.php" method="post">
                                     <input type="hidden" name="a" id="a" value="<?php echo $row['fid']; ?>">
                                      <input type="hidden" name="b" id="b" value=<?php echo "\"".$row['username']."\""; ?>>
                                       <input type="hidden" name="c" id="c" value="<?php echo $row['date']; ?>">
                                    <td width="200px;"><button type="submit" id="sub" name="sub" >CANCEL BOOKING</button></td>
                                  </form>
                 				</tr>
                            <?php	
                               }
                               }
                               ?>	
                               
                            	</table>
                            </div>
                             <div>
                                <form action="del">
                            	<table >
                            	<thead>
                            	    <th>......</th>
                            		<th>Flight</th>
                            		<th>Date</th>
                            		<th>No Of Tickets</th>
                            		<th>Status</th>
                            	</thead>
                            	
                            	<tr>
                            	<?php
                            	$query = ("SELECT * FROM booking WHERE username='".$_SESSION['username']."%'");
                                $numrows = mysqli_query($conn,$query);
                            	 while ( $row=mysqli_fetch_assoc($numrows)) {
                            	 	if ($row['date']<date('Y-m-d')) {
                            	 		
                            	 	
                 	?>
                 		         
                 		
                 				<tr> 

                          <?php if (substr($row['fid'], 0,1)=="i") {  ?>
                             <td><img src="https://upload.wikimedia.org/wikipedia/en/9/93/IndiGo_Logo.jpg" height="80px" width="80px"></td>
                          <?php }  
                          elseif (substr($row['fid'], 0,2)=="jl") {  ?>

                            <td><img src="http://www.delhicapital.com/images1/jetlite.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row['fid'], 0,2)=="ja") {  ?>

                            <td><img src="https://pbs.twimg.com/profile_images/876775499799736321/1nFK_O5O_400x400.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row['fid'], 0,2)=="ac") {  ?>

                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Air_Costa_Logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row['fid'], 0,2)=="ai") {  ?>

                            <td><img src="https://yadusingh.files.wordpress.com/2016/12/air-india-australia-logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row['fid'], 0,2)=="sj") {  ?>

                            <td><img src="http://www.afaqs.com/all/news/images/news_story_grfx/2015/06/44463/Spicejet-Old-Logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                          elseif (substr($row['fid'], 0,2)=="va") {  ?>

                            <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/bf/Vistara_logo.svg/1253px-Vistara_logo.svg.png" height="80px" width="80px"></td>
                            <?php
                          }
                          elseif (substr($row['fid'], 0,2)=="ga") {  ?>

                            <td><img src="https://2.bp.blogspot.com/-BGWl16apiQs/WDZb4RiCSGI/AAAAAAAATFQ/N2nZmsjsqdsUJHmJ4lnyW3aa31rPJ5v3QCLcB/s1600/GoAir%2BLogo.PNG" height="80px" width="80px"></td>
                            <?php
                          }
                          ?>
                                    <td><?php echo $row['fid']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['nop']; ?></td>
                                    <td width="200px;"><button type="submit" id="sub" name="sub " class="t" >TRAVELLED</button></td>
                 				</tr>
                            <?php	
                               }
                               }
                               ?>	
                               </form>
                            	</table>
                            </div>
                            
                                        
                            
                           
                            
							
</body>
<style type="text/css">
        .t{
        	background-color: red;
        }
        .t:hover{
        	background-color: red;
        }
        button{
            
                height: 50px;
                width: 150px;
                background-color: #ff82df;
                font-size: 15px;
                border:none;

        }
        button:hover{
                transition-duration: 0.3s;
                background-color: #7fffa5;
                box-shadow: 0px 0px 10px #809987;
        }
        
        p{
                color:red;
                font-size: 20px;
        }
        .flight
        {
            background-color: rgb(66, 152, 244);
            color: white;
            text-align: center;
            height: 60px;
            font-size: 35px;
            padding-top: 10px;
            box-shadow: 2px 2px 10px #91a7bf;
            border-radius: 3px;
            width: 100%;
        }
        table{
            border:none;
            box-shadow: 0px 2px 10px #4d98ed;
            width: 100%;
            margin-top: 18px;
            padding: 5px;
             background-color: pink;
        }
        thead{
            font-weight: bold;
            font-size: 18px;
            text-transform: uppercase;
            font-family: "Calibri", Times, serif;
            text-align: left;
        }
        tr{
            border:1px solid #c7f8f9;
        }
        
</style>
</html>	