
<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');


// Check connection


	//echo "connection succeefull";



if(isset($_POST["submit"])){
	session_start();
$p_id=$_POST['cart'];
$weight=$_POST['product_qty'];
$price=$_POST['amount'];
$total=0;
$q=0;

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
 


$total=$weight*$price;
	    
		
		

$status=1;
$sql1="INSERT INTO `tbl_cart`(`cart_id`, `p_id`, `cust_id`, `weight`,`totalwp`,`status`)
VALUES(NULL,'$p_id','$cust_id','$weight','$total','1')";
if(mysqli_query($con,$sql1))
{

	 //echo "<script>alert('Your have successfully added product to  cart');document.location='singlecust.php? &key=<?php echo .$r['p_id'];";
echo '<script type="text/javascript">'; 
echo 'alert("Going to cart");'; 
echo 'window.location.href = "checkout.php"';
echo '</script>';
}
	
	

}
}
else {
	session_start();
$p_id1=$_POST['cart'];
$weight1=$_POST['product_qty'];
$price1=$_POST['amount'];
$total1=0;
$q=0;

$id=$_SESSION['username'];

if($_SESSION['ssid']=session_id())

{
	$email=$_SESSION['username'];
	
	$sql="select * from signup where email='$email'";
	$result=mysqli_query($con,$sql);
	while($r=mysqli_fetch_array($result))
	{
		$cust_id1=$r['cust_id'];
	
	}
 


$total1=$weight1*$price1;
echo"$total1";
	    
		
		


$sql2="UPDATE `tbl_cart` SET weight='$weight1',totalwp='$total1' WHERE cust_id='$cust_id1' AND p_id='$p_id1'";
if(mysqli_query($con,$sql2))
{

echo "<script>alert('Going to  cart');document.location='checkout.php'</script>";
//echo '<script type="text/javascript">'; 
//echo 'alert("Your cart is updated ... Going to cart");'; 
//echo 'window.location.href = "checkout.php"';
//echo '</script>';
}
	
	else 
		echo "eroor";
}

}
mysqli_close($con);
?>