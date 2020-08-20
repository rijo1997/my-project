<?php
  session_start()
  
?>
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
		<h1 align=center>Admin Panel</h1>
       
    </header>

    <ul>
     <li align="left"><a href="index.html">Back</a></li>
        <!--<li>Enter new category: <input type="text" name=cat value="e.g." ></li>
        <li><input type="submit" value="Add"></li>
        <li>li>
        <li><a href="index.php">Log Out</a></li>
       !-->
    </ul>


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" action="../product.php" method="post" enctype="multipart/form-data">

            
                  <div class="form-row">
					<label>
					<span>Product Name </span>
					<input type="text" name="name" placeholder="eg.Apple Halwa" required=" ">
					
					
                 </label>
				 </div>
				 <div class="form-row">
						<label>
						<span>Price</span>
						<input type="text" name="price"  placeholder="" required=" "  onblur="javascript:return validatePrice(this);" >
						<span style="display:inline-block; width: YOURWIDTH;"></span>
						<span style="padding-right:500px;"></span>
						
                 </label>
				 </div>
                <div class="form-row">
					<label>
					<span>Product weight</span>
					<input type="text" name="weight" placeholder="eg.1kg" required=" ">
					
					
                 </label>
				 </div>
              <div class="form-row">
				<label>
				<span>Small Description </span>
					<textarea  name="disc"  placeholder="Write few lines about your product" required=" "  ></textarea>
					
					
                  </label>

				</div>
				        
			     <div class="form-row">
				 <label>
                    <span>select category</span>
					
				
				         <select id="cat" name="cat" style="width: 600px; margin: 2 auto;">
                            <option>choose a category</option>
                            <?php
                             $conn = mysqli_connect("localhost","root","",'new_halwa');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



								$sql="SELECT * FROM tbl_category WHERE status='1'";
								$result=mysqli_query($conn,$sql);
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
         
			
			       <div class="form-row">
                    <label>
				   <span>select photos</span>
					    
						<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />
                      
						
							<input type="file" id="fileselect" name="image[]" multiple="multiple" />
							
					     
                    </label>
          
		          </div>
			
                  <div class="form-row"></div>
                     <input type="submit" name="product" value="Add">	
					 <span style="padding-left:600px;"></span>
                 

        </form>
			  
         
				

    </div>


</body>

</html>

