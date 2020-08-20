
<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');

$tot_price=$_POST['tot_price'];
$name=$_POST['name'];
$city=$_POST['city'];
$lname=$_POST['lname'];
$phno=$_POST['phno'];
$hname=$_POST['hname'];
$pcode=$_POST['pcode'];
$district=$_POST['district'];
$date=date('Y-m-d');

// Check connection


	//echo "connection succeefull";


session_start();

$id=$_SESSION['username'];

if($_SESSION['ssid']=session_id())
{
	
	$email=$_SESSION['username'];
	
	$sql="select * from signup where email='$email'";
	$result=mysqli_query($con,$sql);
	while($r=mysqli_fetch_array($result))
	{
		$cust_id=$r['cust_id'];
	
	}
	
$sqld="SELECT * FROM tbl_cart";
								$resultd=mysqli_query($con,$sqld);
								
				            while($rowd=mysqli_fetch_assoc($resultd))
							{   
								
								if($cust_id==$rowd['cust_id'])
								{	
									$p_id=$rowd['p_id'];
									$weight=$rowd['weight'];
									
								}
								

$sql8="INSERT INTO `tbl_order`(`order_id`, `cust_id`, `p_id`, `dis_id`, `tot_price`, `weight`, `name`,`lname`, `phno`, `hname`, `pcode`,`city`, `date_of_order`, `status`)
 VALUES ('NULL','$cust_id','$p_id','$district','$tot_price','$weight','$name','$lname','$phno','$hname','$pcode','$city','$date','1')";

if(mysqli_query($con,$sql8))
{
	// echo "<script>alert('Product is added in your cart');document.location='checkout.php';</script>";
	header("Location: payment.html");
//echo "success";
	

}
	else
	{
		echo $weight."<br>";
		echo $tot_price."<br>";
		echo $name."<br>";
		echo $phno."<br>";
		echo $district."   district<br>";
		
		echo $pcode."pin<br>";
		echo $cust_id."reg<br>";
        echo "Error<br>";
	}
	
	
							}

}


mysqli_close($con);
?>