
if($email=="alentomshaji@gmail.com" && $password=="222")
{
	
	session_start();
	$_SESSION['uid']=$email;
	$_SESSION['ssid']=session_id();
header('location: index.html');	//}
}


else 
if($email==$r['email'] && $password==$r['password'])
		{
			session_start();
	        $_SESSION['uid']=$email;
	        $_SESSION['ssid']=session_id();
			header('location:index.html');
		}
		else
		{
			header("location:index.html?message=Invalid Password");
		}
