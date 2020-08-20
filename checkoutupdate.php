
<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');


// Check connection


	//echo "connection succeefull";


session_start();
$p_id=$_POST['cart'];
$weight=$_POST['product_qty'];

$q=0;
echo "$weight";
echo "$p_id";
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
 

	
	    
		
		

$sql1= "UPDATE tbl_cart SET weight='$weight' WHERE p_id='$p_id' AND cust_id='$cust_id'";
if(mysqli_query($con,$sql1))
{

	 //echo "<script>alert('Your have successfully added product to  cart');document.location='singlecust.php? &key=<?php echo .$r['p_id'];";
//echo '<script type="text/javascript">'; 
//echo 'alert("Your have successfully updated  go to checkout");'; 
//echo 'window.location.href = "checkout.php"';
//echo '</script>';
}
	
	

}


mysqli_close($con);
?>