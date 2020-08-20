
<?php

if(isset($_POST["submit"]))
		{
			echo "<script>alert('You have sign in for adding the item.go to sign in');document.location='index.php';</script>";
	      //$Message = "Login Failed. Invalid username or password";
          //header("Location:index.php?Message={$Message}");		
		}
		elseif(isset($_POST["cart"]))
		{
	echo "<script>alert('You have successfully added item into cart');document.location='#';</script>";
		}
	?>	 