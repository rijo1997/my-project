<?php
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_halwa";
$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(!$con)
{
	die('could not connect: '.mysql_error());
	
}

else
{ 
session_start(); 
$email=$_SESSION['username'];
$sql="SELECT * FROM  signup WHERE email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$message=$_POST['message'];
$date=date('Y-m-d');	
	
$sql1="INSERT INTO feedback(feedid,cust_id,email,name,message,created_on,status)
VALUES('','1','$email','$name','$message','$date','1')";
if(mysqli_query($con,$sql1))
{
	
	echo "<script>alert('your feedback is entered  successfully'); document.location='index1.php';</script>";


}
else
{
	echo "error";
}
}
mysqli_close($con);

?>
