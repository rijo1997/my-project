<?php
$name=$_POST["name"];
$email=$_POST["mail"];
$mobile=$_POST["number"];
$pswrd=$_POST["pword"]; 

$conn = mysqli_connect("localhost","root","",'movie_ticket2');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{

// Create database
$sql="insert into login(email,password,status,role) values('$email','$pswrd','1','1')";
if(!mysqli_query($conn, $sql)) 
{
		 			 //echo "<script>alert('Email id already registered with us.Login Now');document.location='index.php';</script>";
$Message1 = "Email id already registered with us . Try Login";
    header("Location:index.php?Message={$Message1}");
					 }
else
{

$sql="insert into signup(cust_id,email,name,ph_no) values('','$email','$name','$mobile')";
if (mysqli_query($conn, $sql))
{
		 			 //echo "<script>alert('Registration completed successfully');document.location='index.php';</script>";
					 $Message1 = "You are registered successfully . Login Now";
    header("Location:index.php?Message={$Message1}");
} 
else 
{
		 			 //echo "<script>alert('Error while inserting values');document.location='index.php';</script>";
					 $Message1 = "Registration failed";
    header("Location:index.php?Message={$Message1}");
}
}
}
mysqli_close($conn);	
?>