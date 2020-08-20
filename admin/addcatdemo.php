
<?php


$cat=$_POST['cat'];
// Create connection

$conn = mysqli_connect("localhost","root","",'new_halwa');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	
$sql="INSERT INTO `tbl_category`(`cat_id`, `cat_name`, `status`) VALUES(NULL,'$cat','1')";
	
if(mysqli_query($conn,$sql))
{

echo "<script>alert('1 Category added ');document.location='addcat.php';</script>";
}
else
{
	//echo "<script>alert('INSERTION FAILED $cat ');document.location='addcat.php';</script>";
 
}

mysqli_close($conn);
?>