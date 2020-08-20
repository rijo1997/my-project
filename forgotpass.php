
<?php
session_start();
include 'connect.php';
$id=$_POST['em'];
		$sql="SELECT email,password FROM login WHERE email='$id'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	
	$b=$row['password'];
	if($id==$row['email'])
	{	
//echo "$b";
	$p="http://localhost/halwa1/web/index.php?key=$id";
	$m="Your login details \r\nUsername :$id\r\nPassword :$b";
	mail($id,"$p",$m);
    $Message = "Password has been sent to your email address";
          header("Location:index.php?Message={$Message}");
	}
	else
	{
		$Message = "Email id not registered";
          header("Location:index.php?Message={$Message}");
	}
	
	//header("location:index.php?message=Please provide valid informations");
	mysqli_close($con);
?>
