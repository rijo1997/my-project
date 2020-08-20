
<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');

$q=$_GET['q'];
$pr=$_GET['pr'];
$cos=$_GET['cos'];

//$p_id=$_POST['cart'];
$qnty=$q+1;
$price=$cos*$qnty;
$q=0;
//echo "$qnty";
// Check connection


	//echo "connection succeefull";


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
										
$sqlc="SELECT * FROM tbl_product WHERE p_id=$pr";
$resultc=mysqli_query($con,$sqlc);
$rc=mysqli_fetch_assoc($resultc);

$status=1;
$sql1="UPDATE `tbl_cart` set `weight`='$qnty', `totalwp`='$price' WHERE `p_id`=$pr";
if($qnty<=$rc['max_weight'])
{
if(mysqli_query($con,$sql1))
{

	// echo "<script>alert('Your have successfully added product to  cart');document.location='checkout.php';</script>";
	//header("Location: checkout.php");
	$sql5="SELECT SUM(totalwp) AS total
FROM tbl_cart
WHERE cust_id='$cust_id'";
$result5=mysqli_query($con,$sql5);
while($r5=mysqli_fetch_array($result5))
	{
		$tot=$r5['totalwp'];
	}
	//$total=0;
	//$total=$total+$tot;
	if(mysqli_query($con,$sql5))
{
	//echo "$total";
	header("Location: checkout.php?total=$tot");
	//echo "<script>alert('$tot');document.location='checkout.php';</script>";
}
	

}
}

	else
	{
		header("Location: checkout.php?total=$tot");
echo"Error";
	}
	
	


}


mysqli_close($con);
?>