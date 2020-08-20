<?php
 // Variable To Store Error Message
    $a=$_POST['email'];
	$b=$_POST['password'];
    $con=mysqli_connect('localhost','root','','new_halwa') or die(mysqli_error());      
	$sql="SELECT * FROM login";
	$result=mysqli_query($con,$sql);
	while($r=mysqli_fetch_array($result))
	{
			if($a==$r['email'] && $b==$r['password'] && $r['role']==1)
         {
		  session_start();	 
         $_SESSION['username']=$a;
		 $_SESSION['password']=$b;
		header("location:index1.php");
         }
         else if($a==$r['email'] && $b==$r['password'] && $r['role']==0)
         {
	        session_start();	 
         $_SESSION['username']=$a;
		 $_SESSION['password']=$b;
         header("location:admin/index.html");
         }
         else
		 {
			$val=0;
		 }
			}
         if($val==0)
		{
			echo "<script>alert('Invalid login details');document.location='index.php';</script>";
	      //$Message = "Login Failed. Invalid username or password";
          //header("Location:index.php?Message={$Message}");		
		}
		 
          	
		mysqli_close($con);
?>