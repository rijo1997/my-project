<?php
session_start();
						$con=mysqli_connect("localhost","root","","mytyre");
						$id=$_SESSION['uid'];
						$sql="SELECT * FROM tb_regn WHERE email='$id'";
						
						$newp=$_POST['password'];
						$newph=$_POST['nphno'];
						$newnam=$_POST['nname'];
						
						$result=mysqli_query($con,$sql);
	                    $row=mysqli_fetch_assoc($result);
						$email=$row['email'];

$po="Phone Number";
$pa="Password";						
$na="Name";			
						
$sql = "UPDATE tb_login SET password='$newp' WHERE email='$email'";
$sql1 = "UPDATE tb_regn SET phone_number='$newph' WHERE email='$email'";
$sql2 = "UPDATE tb_regn SET cust_name='$newnam' WHERE email='$email'";

if(mysqli_query($con,$sql))
{
	echo "<script>alert('$pa changed');document.location='customer.php';</script>";
if(mysqli_query($con,$sql1))
{
if(mysqli_query($con,$sql2))
{	
echo "<script>alert('$po changed');document.location='customer.php';</script>";
}}
//echo "<script>alert('$po changed');document.location='customer.php';</script>";

}
else
{
	echo "<script>alert('Error ');document.location='customer.php';</script>";
 
}

mysqli_close($con);
?>