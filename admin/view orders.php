


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
						
					</li>
					</li>
					
				
					
				
						
					
				</ul>
			</div>
		</div>
	</div>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

     



</html>
<?php



        $con = mysqli_connect("localhost","root","",'new_halwa');
	    $sql = "SELECT * FROM tbl_order";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
	
?>
	
				
					
			
				
			
			
												<?php
											   
											
	                                  
									   
                                               
					  
																	
							
$sql="select  * from tbl_order where status='1' ORDER BY p_id ASC";
$result=mysqli_query($con,$sql);
echo "<table border=10>";
echo"<tr><th>NAME</th><th>IMAGE</th><th>PRICE</th><th>WEIGHT(in kg)<th>PRICE*WEIGHT</th><th>DATE_OF_ORDER</th><th>CUST_ID</tr>";
/*echo "<style>";
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th,td {
    text-align: left;
    padding: 8px;
}*/
$total=0;
while($row=mysqli_fetch_array($result))
{
	$a=$row['p_id'];
	//$b=$row['p_name'];
	$c=$row['weight'];
	$f=$row['date_of_order'];
	$h=$row['cust_id'];
	
	
	
$sql15="select * from tbl_product  where p_id='$a' AND status='1'";
$result1=mysqli_query($con,$sql15);
	while($roww=mysqli_fetch_array($result1))
{
	$d=$roww['p_name'];
	$e=$roww['p_price'];
	$q=0;
    $sql6="SELECT * FROM tbl_image WHERE p_id='$a' AND status='1'";
									$result6=mysqli_query($con,$sql6);
				                     while($row6=mysqli_fetch_assoc($result6))
									 {
										 $image[$q]=$row6['image1'];
										 
									 
	
    $tot=$c*$e;


		

	echo "<tr><td>".$d."</td>";
	?>
	<td><html>
    <img src=<?php echo $image[0];?> alt="" height=60 width=80></html></td>
	<?php
	echo "<td>".$e."</td>";

     echo "<td>".$c."</td>";
     echo "<td>".$tot."</td>";
	 echo "<td>".$f."</td>";
	 echo "<td>".$h."</td>";
	 $total=$total+$tot;
	
	echo "</tr>";

   $q++;	      
}
}
}
																					
echo"</table>";
											
											
?>
<html>
<span class="item_price"><?php echo "GRAND  AMOUNT :$total";	?></span>
</html>
		                												
	


				
				</div>
				<?php
mysqli_close($con);
?>