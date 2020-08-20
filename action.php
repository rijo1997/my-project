<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
$con=mysqli_connect("localhost","root","","new_halwa");


if(isset($_POST["getProduct"])){
	
	$product_query = "SELECT * FROM tbl_product WHERE Status='1'";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$p_id    = $row['p_id'];
			$p_name   = $row['p_name'];
			
			$pro_price = $row['p_price'];

			echo "
			<div class='col-md-4 product-men'>
							<div class='men-pro-item simpleCart_shelfItem'>
				              <div class='item-info-product'>
									
									<h4>$p_name</h4></div>
								
								<div class='panel-heading'>$.$p_price.00
								</div>
									<button pid='$p_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}
}





?>






