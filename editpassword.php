<?php
session_start();
						$con=mysqli_connect("localhost","root","","new_halwa");
					


         $username = $_SESSION['username'];
        $password = $_POST['pword'];
        $newpassword = $_POST['password1'];
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
          header("Location:index.php?Message={$Message}");        }
		}
       else
        {
$Message = "Password do not match";
          header("Location:index1.php?Message={$Message}");
	}
	   mysqli_close($con);
      ?>