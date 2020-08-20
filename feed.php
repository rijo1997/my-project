
<html>
<style>

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
	background-color: aliceblue;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Panel</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">
	

</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_halwa";
//$name=$_POST['name'];
//$rollno=$_POST['rollno'];
//$mark1=$_POST['mark1'];
//mark2=$_POST['mark2'];
//$mark3=$_POST['mark3'];
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from feedback";
$result=mysqli_query($con,$sql);
echo " &nbsp; <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USER  DETAILS </h1>";
echo"<table border='2'>";
echo"<tr><th>Email </th><th>Customer</th><th>Message</th><th>Date</th></tr>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr><td>".$row['email']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['message']."</td>";
	echo "<td>".$row['created_on']."</td>";
	echo"</tr>";
	
}
echo"</table>";
mysqli_close($con);
?>
<a href="index.html">  Go To Home