<?php

//echo "<script>alert('esssss');document.location='upload_file.php';</script>";
$con=mysqli_connect("localhost","root","","new_halwa");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if(!isset($_FILES['image'])){
	echo "<script>alert('essssWWWWWWWs');document.location='upload_file.php';</script>";
}
if(isset($_POST['submit'])){
if(isset($_FILES['image'])){
	echo "<script>alert('errorssssss');document.location='upload_file.php';</script>";
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
        		
        $query="INSERT into tbl_image (`image_id`,`image`,`image_text`,'status') VALUES(NULL,'$target_file','yyyy','1')";
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
            mysqli_query($con,$query);            
        }else{
                print_r($errors);
		}   }
    }
}	
    }
	
	
	
	
	?>