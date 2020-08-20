

<html>

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
       
    </header>

    <ul>
     <li align="left"><a href="adminmanagestore.php">Back</a></li>
        <!--<li>Enter new category: <input type="text" name=cat value="e.g. bike" ></li>
        <li><input type="submit" value="Add"></li>
        <li>li>
        
       !-->
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="addcatdemo.php">

		
			<div class="form-row">
                <label>
                    <span></span>
					<!--<input type="text" name="cat"> 
					<select class=Brand required=""  style="width:150px" >
					<option value="1"> 
					<?php  
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytyre";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
$sql="select brandname from brand where brandid='1'";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
	$a=$row['brandname'];  
	echo $a;
}*/
	?>
	</option>
	</select>-->
	
	<select id="bran" name="bran" style="width: 250px; margin: 0 auto;">
                            <option>Choose a category</option>
                            <?php
include 'connect.php';



								$sql="SELECT * FROM tbl_category WHERE status='1'";
								$result=mysqli_query($con,$sql);
		                        while($row=mysqli_fetch_assoc($result))
								{
								?>
								<option value="<?php echo $row['cat_id']; ?>" ><?php echo $row['cat_name']; ?></option>
								<?php  
								}
								
								
							?>
                        </select>
	

                </label>
            </div>
            <div class="form-title-row">
                <h1></h1>
            </div>

            <div class="form-row">
                <label>
                    <span> </span>
					<input type="text" name="cat">
                </label>
            </div>


          

           

             <div class="form-row">
                        <button type="submit">Add</button>
             </div>

        </form>

    </div>


</body>

</html>



