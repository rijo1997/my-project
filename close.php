
<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');


$pr=$_GET['pr'];



//echo "$qnty";
// Check connection

session_start();
$id=$_SESSION['username'];
if($_SESSION['ssid']=session_id()){

	
	$email=$_SESSION['username'];
	
	$sql="select * from signup where email='$email'";
	$result1=mysqli_query($con,$sql);
	while($r=mysqli_fetch_array($result1))
	{
		$cust_id=$r['cust_id'];
	
	}

$status=1;

$sql1="DELETE FROM `tbl_cart` WHERE `p_id`='$pr' and cust_id='$cust_id'";
$sql2="DELETE FROM `tb_order` WHERE `p_id`='$pr' and status='1' and cust_id='$cust_id'";

if(mysqli_query($con,$sql1))
{
	if(mysqli_query($con,$sql2))
	{
		// echo "<script>alert('Your cart is updated');document.location='checkout.php';</script>";
		header("Location: checkout.php");
	}
	else
	{
		
		header("Location: checkout.php");

	}
}


	
	else
	{
		
header("Location: checkout.php");
	}
	
	


}


mysqli_close($con);
?>