<?php
require 'connection.php';
$conn    = Connect();
$from=$_POST['from'];
$to=$_POST['to'];
$dat5=$_POST['d1'];
$adult=$_POST['adult'];
$child=$_POST['child'];
$inf=$_POST['infant'];
$class=$_POST['class'];
$query = ("SELECT * FROM fdetails WHERE fsource='$from' AND fdest='$to'");
$query1 = ("SELECT * FROM fdetails WHERE fsource='$from'");
$query2 = ("SELECT * FROM fdetails WHERE fdest='$to'");
session_start();
if (!isset($_SESSION['username'])) {
   header("location:logout.php");
}
$_SESSION['dd']=$dat5;
$_SESSION['adult']=$adult;
$_SESSION['child']=$child;
$_SESSION['inf']=$inf;
$_SESSION['from']=$from;
$_SESSION['to']=$to;
$_SESSION['nop']=$_SESSION['adult']+$_SESSION['child'];
$i=1;
?>
<html>
<head>
	<title>Search</title>
</head>
<script>
function fun(x)
{
 if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  
  xmlhttp.open("GET","get.php?q="+x.value,true);
  xmlhttp.send();
}
</script>
<style type="text/css">
    .sort{
        margin-top: 10px;
        margin-left: 800px;
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
    .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: inline-block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: inline-block; 
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
button{
  margin-right: 10px;
  margin-left: 10px;
}
.tt{
    width: 400px;
    height: 100px;
    
}
.tt tr,td{

}
</style>
<body>                      
                           <div class="sort">
                           <a href="logout.php"><button>LOG OUT </button></a>
  <a href="booking.php"><button> MY BOOKINGS</button></a>
                            <div class="dropdown">
                            <button class="dropbtn">Sort By Price</button>
                            <div class="dropdown-content">
                            <button class="s" name="ss" value="desc" onclick="fun(this)">High to Low</button>
                            <button class="s" name="ss" value="" onclick="fun(this)">Low to High</button>
                            </div>
                            </div>
                            </div>
                                        
                            
                           
                            
							<div id="txtHint">
							<div class="flight">
                                         
                                                 DIRECT FLIGHTS

                            </div>
                            <form action="book.php" method="post">
                                <table class="dflight">
                 				<thead>
                                    <th>......</th>
                 					<th>Sl No</th>
                                    <th>Flight code</th>
                 					<th>Flight</th>
                 					<th>Departure</th>
                 					<th>Arrival</th>
                                    <th>Journey</th>
                                    <th>Fare</th>
                                    <th width="200px;"></th>
                 				</thead>
                                <tr>
                                    <td colspan="8"><hr style="border: 2px solid #313333;"></td>
                                </tr>
<?php
$numrows = mysqli_query($conn,$query);
                 while ( $row=mysqli_fetch_assoc($numrows)) {
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


                                                       
                 					<td><?php echo $i;$i++; ?></td>
                                    <td style="text-transform: uppercase;"><?php echo $row['fid']; ?></td>
                 					<td><?php echo $from." to ".$to; ?></td>
                 					<td><?php echo $row['fstime']; ?></td>
                 					<td><?php echo $row['fdtime']; ?></td>
                                    <td><?php 
                                            $diff = strtotime(($row['fdtime']))-strtotime(($row['fstime']))-60*60;

                                            //printf('%d hours, %d minutes', $diff->h, $diff->i);
                                            echo date('H', $diff)." Hr ".date('i',$diff)." Min ";
                                    ?></td>
                                    <td>
                                        <?php echo $row['price']; ?>
                                    </td>
                                    <td width="200px;"><button type="submit" id="sub" name="sub" value="<?php echo $row['fid']; ?>">BOOK NOW</button></td>
                 				</tr>
                                <tr>
                                    <td colspan="8"><hr style="border-color: rgba(186, 193, 193,0.2);"></td>
                                </tr>
                 		
                 	<?php
                 }

                // $conn->close();
                 if($i==1)
                 { 
                        echo "<br>";
                 	echo "<tr><td colspan=\"6\" style=\"color:red; font-size:40px;\">No direct flights <td><tr>";
?>
                                </table>
                                </form>
<div class="flight">
        INDIRECT FLIGHTS
</div>  
<form action="book2.php" method="post">
                                <table class="iflight">
                                                <thead>
                                                        <th>......</th>
                                                        <th>flight</th>
                                                        <th>......</th>
                                                        <th>flight</th>
                                                        <th>Journey</th>
                                                        <th>Departure</th>
                    
                                                        <th>Arrival</th>
                                                        <th>Journey details</th>
                                                        <th>Fare</th>
                                                </thead>
<?php
$numrows1 = mysqli_query($conn,$query1);
$numrows2 = mysqli_query($conn,$query2);
$j=1;

                 while ( $row1=mysqli_fetch_assoc($numrows1)) {
                       // if ($row1['fdest']==$row2['fsource'])
                        while ($row2=mysqli_fetch_assoc($numrows2)) {
                                # code...
                        
                        
                            if ($row1['fdest']==$row2['fsource'] && $row1['fdtime']<$row2['fstime']  )     
                            {
                        
                        ?>
                                                       <tr>
                                                       <?php if (substr($row1['fid'], 0,1)=="i") {  ?>
                             <td><img src="https://upload.wikimedia.org/wikipedia/en/9/93/IndiGo_Logo.jpg" height="80px" width="80px"></td>
                          <?php }  
                          elseif (substr($row1['fid'], 0,2)=="jl") {  ?>

                            <td><img src="http://www.delhicapital.com/images1/jetlite.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row1['fid'], 0,2)=="ja") {  ?>

                            <td><img src="https://pbs.twimg.com/profile_images/876775499799736321/1nFK_O5O_400x400.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row1['fid'], 0,2)=="ac") {  ?>

                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Air_Costa_Logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row1['fid'], 0,2)=="ai") {  ?>

                            <td><img src="https://yadusingh.files.wordpress.com/2016/12/air-india-australia-logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row1['fid'], 0,2)=="sj") {  ?>

                            <td><img src="http://www.afaqs.com/all/news/images/news_story_grfx/2015/06/44463/Spicejet-Old-Logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                          elseif (substr($row1['fid'], 0,2)=="va") {  ?>

                            <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/bf/Vistara_logo.svg/1253px-Vistara_logo.svg.png" height="80px" width="80px"></td>
                            <?php
                          }
                          elseif (substr($row1['fid'], 0,2)=="ga") {  ?>

                            <td><img src="https://2.bp.blogspot.com/-BGWl16apiQs/WDZb4RiCSGI/AAAAAAAATFQ/N2nZmsjsqdsUJHmJ4lnyW3aa31rPJ5v3QCLcB/s1600/GoAir%2BLogo.PNG" height="80px" width="80px"></td>
                            <?php
                          }
                          ?>
                                                       
                                                        <td><?php  $j++; echo $row1['fid']; ?></td>
                                                        <?php if (substr($row1['fid'], 0,1)=="i") {  ?>
                             <td><img src="https://upload.wikimedia.org/wikipedia/en/9/93/IndiGo_Logo.jpg" height="80px" width="80px"></td>
                          <?php }  
                          elseif (substr($row2['fid'], 0,2)=="jl") {  ?>

                            <td><img src="http://www.delhicapital.com/images1/jetlite.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row2['fid'], 0,2)=="ja") {  ?>

                            <td><img src="https://pbs.twimg.com/profile_images/876775499799736321/1nFK_O5O_400x400.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row2['fid'], 0,2)=="ac") {  ?>

                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/6/67/Air_Costa_Logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row2['fid'], 0,2)=="ai") {  ?>

                            <td><img src="https://yadusingh.files.wordpress.com/2016/12/air-india-australia-logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                           elseif (substr($row2['fid'], 0,2)=="sj") {  ?>

                            <td><img src="http://www.afaqs.com/all/news/images/news_story_grfx/2015/06/44463/Spicejet-Old-Logo.jpg" height="80px" width="80px"></td>
                            <?php
                          }
                          elseif (substr($row2['fid'], 0,2)=="va") {  ?>

                            <td><img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/bf/Vistara_logo.svg/1253px-Vistara_logo.svg.png" height="80px" width="80px"></td>
                            <?php
                          }
                          elseif (substr($row2['fid'], 0,2)=="ga") {  ?>

                            <td><img src="https://2.bp.blogspot.com/-BGWl16apiQs/WDZb4RiCSGI/AAAAAAAATFQ/N2nZmsjsqdsUJHmJ4lnyW3aa31rPJ5v3QCLcB/s1600/GoAir%2BLogo.PNG" height="80px" width="80px"></td>
                            <?php
                          }?>
                                                         <td><?php echo $row2['fid']; ?></td>
                                                        <td><?php echo $from." to ".$to; ?></td>
                                                        <td><?php echo $row1['fstime']; ?></td>
                                                        <td><?php echo $row2['fdtime']; ?></td>
                                                        <td><div class="dropdown">
                                                        <button class="dropbtn">Journey Details</button>
                                                        <div class="dropdown-content">
                                                        <table class="tt">
                                                            <thead>
                                                                <th>flight code</th>
                                                                <th>jouney</th>
                                                                <th>departure</th>
                                                                <th>arrival</th>
                                                                <th>fare</th>
                                                            </thead>
                                                            <tr style=" padding-left:15px; padding-right: 15px;text-align: center;">
                                                                 <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row1['fid']; ?></td>
                                                                 <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $from." to ".$row1['fdest']; ?></td>
                                                                 <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row1['fstime']; ?></td>
                                                                 <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row1['fdtime']; ?></td>
                                                                 <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row1['price']; ?></td>
                                                            </tr>
                                                            <tr style=" padding-left:15px; padding-right: 15px;text-align: center;">
                                                                <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row2['fid']; ?></td>
                                                                <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row1['fdest']." to ".$to; ?></td>
                                                                <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row2['fstime']; ?></td>
                                                                <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row2['fdtime']; ?></td>
                                                                <td style=" padding-left:15px; padding-right: 15px;text-align: center;"><?php echo $row2['price']; ?></td>
                                                            </tr>
                                                        </table>
                                                        </div>
                                                        </div></td>
                                                        <td><?php echo $row2['price']+$row1['price']; ?></td>
                                                        <input type="hidden" name="fi" id="fi" value="<?php echo $row2['fid']; ?>">
                                                        <td width="200px;"><button type="submit" id="sub" name="sub" value="<?php echo $row1['fid']; ?>">BOOK NOW</button></td>
<?php
                 }
         }
         $numrows2 = mysqli_query($conn,$query2);
 }

                 $conn->close();
                 if($j==1)
                 {
                        echo "<br>";
                        echo "<tr><td colspan=\"11\" style=\"color:red; font-size:40px;\">No indirect flights <td><tr>";
                }
        }
?>                                                        </tr>
</table>
</form>
</div>
</body>
<style type="text/css">
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
        body{
                background-color: pink;
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