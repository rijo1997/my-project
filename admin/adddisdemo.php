
<?php


$dis=$_POST['dis'];
// Create connection

$conn = mysqli_connect("localhost","root","",'new_halwa');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	
$sql="INSERT INTO `tbl_district`(`dis_id`, `d_name`, `status`) VALUES(NULL,'$dis','1')";
	

if(mysqli_query($conn,$sql))
{

echo "<script>alert('1 district added ');document.location='adddistrict.php';</script>";
}
else
{
	echo "<script>alert('INSERTION FAILED $dis ');document.location='adddisdemo.php';</script>";
 
}

mysqli_close($conn);
?>