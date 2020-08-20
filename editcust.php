<?php
session_start();
						$con=mysqli_connect("localhost","root","","new_halwa");
						$id=$_SESSION['username'];
						$sql="SELECT * FROM  signup WHERE email='$id'";
						
						$newp=$_POST['password'];
						$newph=$_POST['nphno'];
						$newnam=$_POST['nname'];
						
						$result=mysqli_query($con,$sql);
	                    $row=mysqli_fetch_assoc($result);
						$email=$row['email'];

$po="Ph_no";
$pa="Password";						
$na="name";			
						
$sql = "UPDATE login SET password='$newp' WHERE email='$email'";
$sql1 = "UPDATE signup SET ph_no='$newph' WHERE email='$email'";
$sql2 = "UPDATE signup  SET name='$newnam' WHERE email='$email'";


mysqli_query($con,$sql);	
mysqli_query($con,$sql1);
mysqli_query($con,$sql2);

 header("location:index1.php");
 
// echo "<script>alert('your profile is updated successfully'); document.location='index1.php';</script>";
 
mysqli_close($con);

?> 
