<?php
session_start();
include 'connect.php';

$username = $_SESSION['username'];
        $password = $_POST['p'];
        $newpassword = $_POST['pa'];
        $confirmnewpassword = $_POST['cpassword'];
        $result = mysqli_query($con,"SELECT password FROM login WHERE 
email='$username'");
	                    $row=mysqli_fetch_assoc($result);
        if($password==$row['password'])
        {
	$sql="UPDATE login SET password='$newpassword' where 

 email='$username'";
        if(mysqli_query($con,$sql))
        {
$Message = "Password has been changed successfully. Login again";
session_destroy();
          header("Location:index.php?Message={$Message}");        }
		}
       else
        {
$Message = "Passwods donot match";
          header("Location:indexlogin.php?Message={$Message}");
	}
	   mysqli_close($con);
      ?>