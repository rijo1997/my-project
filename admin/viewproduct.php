


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
	background-color: lightsteelblue;
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


	<header>
		<h1>Admin Panel</h1>
       <a href="../index.php">Log Out</a>
    </header>

    	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
						<li>
						<a href="index.html">Back</a>
						<i>|</i>
					</li>
					</li>
					<li><a href="manage_product.php">Add product</a>
					
						</li>
					
						
						
				
				</ul>
			</div>
		</div>
	</div>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

     



</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_halwa";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
$sql="select * from tbl_product ";

$result=mysqli_query($con,$sql);

echo"<h1> PRODUCT INFORMATION</h1>";

echo "<table border=8>";
echo"<tr><th>PRO_ID</th><th>PRODUCT NAME</th><th>CATEGORY ID</th><th>PRICE</th><th>DESCRIPTION</th><th>Status</th><th>Action</th></tr>";

while($row=mysqli_fetch_array($result))
{
	$a=$row['p_id'];
	$b=$row['p_name'];
	$x=$row['category_id'];
	$c=$row['p_price'];
	$f=$row['p_dec'];
	
	if($row['status']==1)
		$d="Active";
	else
		$d="Inactive";

		$e="<a href=removepro.php?id=".$row['p_id']."&name=".$row['p_name']." >Disable</a>";
		$ee="<a href=removepro.php?idd=".$row['p_id']."&name=".$row['p_name']." >Enable</a>";
		
	
	echo "<tr><td>".$a."</td>";
	echo "<td>".$b."</td>";
	echo "<td>".$x."</td>";
	echo "<td>".$c."</td>";
	echo "<td>".$f."</td>";
	
		if($d==1)
	echo "<td>".$d."</td>";
else
	echo "<td>".$d."</td>";

if($row['status']==1 )
	echo "<td>".$e."</td>";
else
	echo "<td>".$ee."</td>";
	echo"</tr>";
	
}
echo"</table>";
mysqli_close($con);
?>