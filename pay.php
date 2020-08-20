


<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');

$cardno=$_POST['cardno'];
$cardname=$_POST['cardname'];
$cvv=$_POST['cvv'];
$exp=$_POST['valid'];

$t=0;
//echo "$qnty";
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
	$d=0;
	$sqld="SELECT * FROM tbl_order";
								$resultd=mysqli_query($con,$sqld);
								
				            while($rowd=mysqli_fetch_assoc($resultd))
							{   
								
								if($cust_id==$rowd['cust_id'])
								{	
										$o_id=$rowd['order_id'];
										$d=$d+$rowd['tot_price'];
										
										$prodid=$rowd['p_id'];
									/*$sql45="SELECT * product where prodid='$prodid'";
									$result45=mysqli_query($con,$sql45);
									$row45=mysqli_fetch_assoc($result45);
									
								
										$x=$row45['no_of_stock'];
							
										
									
									//$x=15;
									$x=$x-$stock;
									$sql46="UPDATE `product` SET `no_of_stock`='$x' WHERE prodid='$prodid'";
									if(mysqli_query($con,$sql46))
{
	$f=0;
}*/

								}
							}
							$sql2="select * from tbl_bank";
	$resultt=mysqli_query($con,$sql2);
	while($rr=mysqli_fetch_array($resultt))
	{
if($cardno==$rr['cardno'] && $cardname==$rr['cardname'] && $cvv==$rr['cvv'] && $exp=$rr['expiredate'])
	{
		$t++;
		$b=$rr['amount'];
	
			if($b >=$d)
		{
			//echo "hai";
		//$d=0;
		$b=$b - $d;
		$sql = "UPDATE tbl_bank SET amount='$b' WHERE cardno='$cardno'";
		
		

if(!mysqli_query($con,$sql))
{
	die('Error'. mysql_error());
}
else
{
	

//$sqlc="UPDATE cart SET status='0' where Reg_id='$cust_id' ";
$sqlc="DELETE FROM `tbl_cart` where cust_id='$cust_id' ";


		
if(mysqli_query($con,$sqlc))
{
			 echo "<script>alert('PAYMENT SUCCESSFUL');document.location='index1.php';</script>";
}


else
{
	echo "Updation error!!";
}
							
}
}
else
	{ 
//echo"Not enough money"; 
echo "<script>alert('Payment Failed!. Insufficient Balance!!');document.location='payment.html';</script>";

}
	}
	else
	{ 
$t=0; 
}

	}
	if($t==0)
	{
		//echo "Entered details is wrong";
		echo "<script>alert('Entered details is wrong!!');document.location='payment.html';</script>";

	}
}
mysqli_close($con);
?>