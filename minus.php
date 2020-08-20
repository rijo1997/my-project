
<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');

$q=$_GET['q'];
$pr=$_GET['pr'];
$cos=$_GET['cos'];

//$p_id=$_POST['cart'];
$qnty=$q-1;
$price=$cos*$qnty;
$q=0;
//echo "$qnty";
// Check connection


	//echo "connection succeefull";


session_start();
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
$sql1="UPDATE `tbl_cart` set `weight`='$qnty', `totalwp`='$price' WHERE `p_id`=$pr";
if($qnty>0)
{
if(mysqli_query($con,$sql1))
{

	
	// echo "<script>alert('Your have successfully added product to  cart');document.location='checkout.php';</script>";
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