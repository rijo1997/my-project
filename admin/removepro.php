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
	$sql = "UPDATE tbl_product SET status='0' WHERE p_id='".$a."'";
	if(!mysqli_query($con,$sql))
		die('Error'. mysql_error());
	else
		echo "<script>alert('$n is Disabled');document.location='viewproduct.php';</script>";
}
else if(isset($_GET['idd']))
{
	$a=$_GET['idd'];
	$sql = "UPDATE tbl_product SET status='1' WHERE p_id='".$a."'";
	if(!mysqli_query($con,$sql))
		die('Error'. mysql_error());
	else
		echo "<script>alert('$n is Enabled');document.location='viewproduct.php';</script>";
}

mysqli_close($con);
?>