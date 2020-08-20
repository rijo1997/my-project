


<?php
		
$con = mysqli_connect("localhost","root","",'new_halwa');


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

	

	


	

//$sqlc="UPDATE cart SET status='0' where Reg_id='$cust_id' ";
$sqlc="DELETE FROM `tbl_cart` where cust_id='$cust_id' ";


		
if(mysqli_query($con,$sqlc))
{
			 echo "<script>alert('CASH DELIVERY IS SUCCESSFUL');document.location='index1.php';</script>";
}



	
}
mysqli_close($con);
?>