<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');


// Check connection


	//echo "connection succeefull";


$a=$_POST['a'];
$w=$_POST['delete'];

	$sql = "DELETE from tbl_cart WHERE p_id='$a'";
	if(!mysqli_query($con,$sql))
		die('Error'. mysql_error());
	else
		echo "<script>alert('  Deleted');document.location='checkout.php';</script>";



?>