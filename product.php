<?php
$con=mysqli_connect("localhost","root","","new_halwa");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['product']))
{
	
    
	$name=$_POST['name'];
	$weight=$_POST['weight'];
	$disc=$_POST['disc'];
	$price=$_POST['price'];
    $cat=$_POST['cat'];
	

echo"$name";
echo"$weight";
echo"$disc";
echo"$price";
echo"$cat";

  $sql="INSERT INTO `tbl_product`(`p_id`, `category_id`, `p_name`, `p_price`, `p_dec`, `p_weight`, `max_weight`, `status`) VALUES
 (NULL,'$cat','$name','$price','$disc','$weight','6','1')";
 if ($con->query($sql) == TRUE) {
    
	$sql1="SELECT MAX(p_id) AS max FROM tbl_product";
	$result=mysqli_query($con,$sql1);
	$row=mysqli_fetch_assoc($result);
	$m=$row['max'];
	//
	//echo $m;
    if(isset($_FILES['image'])){
    $errors= array();
    foreach($_FILES['image']['tmp_name'] as $key => $tmp_name ){
		$target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"][$key]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            header("location:post.php?message=Please avoid unwanted file while uploading");
    
           }
       else
	   {
        $file_name = $_FILES['image']['name'][$key];
        $file_size =$_FILES['image']['size'][$key];
        $file_tmp =$_FILES['image']['tmp_name'][$key];
        $file_type=$_FILES['image']['type'][$key];  
        if($file_size > 2097152){
            $errors[]='File size must be less than 2 MB';
        } 
        		
        $query="INSERT INTO `tbl_image`(`image_id`, `p_id`, `image1`, `status`) VALUES(NULL,'$m','$target_file','1')";
        $desired_dir="uploads";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);        // Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"uploads/".$file_name);
            }else{                                  //rename the file if another one exist
                $new_dir="uploads/".$file_name.time();
                 rename($file_tmp,$new_dir) ;               
            }
            if(mysqli_query($con,$query))
			{	
		   echo "<script>alert('1 product added ');document.location='Admin/manage_product.php';</script>";
			}		
        }
		else{
			echo "<script>alert('Insertion failed');document.location='Admin/manage_product.php';</script>";
               
		}   }
    }
    
		
		
		
    }


 
 }
}
?>