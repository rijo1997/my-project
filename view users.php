<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "halwa";
//$name=$_POST['name'];
//$rollno=$_POST['rollno'];
//$mark1=$_POST['mark1'];
//mark2=$_POST['mark2'];
//$mark3=$_POST['mark3'];
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from tb_regn";
$result=mysqli_query($con,$sql);
echo"<h1> USER DETAILS </h1>";
echo"<table border='2'>";
echo"<tr><th>Email </th><th>Customer Name</th><th>Phone number</th></tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr><td>".$row['email']."</td>";
	echo "<td>".$row['cust_name']."</td>";
	echo "<td>".$row['phone_number']."</td>";
	echo"</tr>";
	
}
echo"</table>";
mysqli_close($con);
?>
<a href="adminindex.html">  Go To Home