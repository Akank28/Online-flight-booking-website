<html>
<body>
<?php
require 'connection.php';
$a=$_GET['q'];
echo "hello everyone";
$conn    = Connect();
$query = ("SELECT * FROM city WHERE cname like '".$a%."'");
$numrows = mysqli_query($conn,$query);
?>
<ul>
<?php
                 while ( $row=mysqli_fetch_assoc($numrows)) {
                    ?>
                    <li><?php echo $row['cname']; ?></li>
<?php
}
?>
</ul>
</body>
</html>

