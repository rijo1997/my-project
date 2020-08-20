<?php
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_halwa";
$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$n=$_GET['name'];
if(isset($_GET['id']))
{
	$a=$_GET['id'];
	$sql = "UPDATE tbl_category SET status='0' WHERE cat_id='".$a."'";
	if(!mysqli_query($con,$sql))
		die('Error'. mysql_error());
	else
		echo "<script>alert('$n is Disabled');document.location='viewcat.php';</script>";
}
else if(isset($_GET['idd']))
{
	$a=$_GET['idd'];
	$sql = "UPDATE tbl_category SET status='1' WHERE cat_id='".$a."'";
	if(!mysqli_query($con,$sql))
		die('Error'. mysql_error());
	else
		echo "<script>alert('$n is Enabled');document.location='viewcat.php';</script>";
}

mysqli_close($con);
?>