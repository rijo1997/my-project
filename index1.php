

<!DOCTYPE html>
<html lang="zxx">


<head>
<?php

$i=0;
session_start();
$id=$_SESSION['username'];
$con = mysqli_connect("localhost","root","",'new_halwa');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

	 

$sql="SELECT * FROM tbl_product WHERE Status='1' ORDER BY p_id DESC ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$product[$i]=$row['p_id'];
	$i++;
	}
	if($i>0)
	$last=end($product);



$var="My Ads";
$co=0;



?>
        
	<title>Halwa store an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!--/tags -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Halwa store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	   <link href="stylecart.css" type="text/css"  />  
		
</head>
<?php
      if (isset($_GET['Message']))
	  {
		  echo $_GET{'Message'};
	  }
		  ?>
<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>Top Deals & Discounts</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index1.php">
						
						<img src="images/log.jpg" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-t" aria-hidden="true"></span></a>
					</li>
					<li>
						   <a href="vieworders.php" class="nav-stylehead">
							<span class="fa fa-truck" aria-hidden="true"></span> Your Orders</a>
							
					</li>
					
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 812 986 5710
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-user" aria-hidden="true"></span>
<?php
					
						$con=mysqli_connect("localhost","root","","new_halwa");
						
						$sql="SELECT * FROM signup WHERE email='$id'";
						$result=mysqli_query($con,$sql);
	                    $row=mysqli_fetch_assoc($result);
						echo $row['name'];
						
				
						
?>					     </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Logout </a>
					</li>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="search1.php" method="post">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<a href="checkout.php" class="nav-stylehead">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button></a>
						
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	<div id="small-dialog1" class="mfp-hide">
		
	</div>
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	<!-- Modal1 -->
	
	<!-- Modal1 -->
	
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">User Profile </h3>
						<?php
					
						$con=mysqli_connect("localhost","root","","new_halwa");
						
						$sql="SELECT * FROM signup WHERE email='$id'";
						$result=mysqli_query($con,$sql);
	                    $row=mysqli_fetch_assoc($result);
						
						
				
						
?>	
						
						<form action="index1.php" method="post" >
       
						<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">  
						<p align=left style="color:#1accfd;">Name : <?php echo $row['name'] ?></p>
						<p align=left style="color:#1accfd;">Email: <?php echo $row['email'] ?></p>
						<p align=left style="color:#1accfd;">Phone Number :<?php echo $row['ph_no'] ?></p>
						<!--<input type="number" placeholder="<?php 
					//	echo $row['phone_number'] ?>"  name="nphno" id="pas" required=''>-->
					  
						
					</div>

							<!--<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>-->
							
							<p>
						    <a href="#" data-toggle="modal" data-target="#myModal3">
						      Edit Your Profile</a></p>
							 
							  <div>
							   <a href="#" data-toggle="modal" data-target="#myModal4">
						      Change your Password </a></div>
							  <input type="submit" value="close">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div> 
                                                                                
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					
					<div class="modal_body_left modal_body_left1">
						<span class="item_price">Are you  sure you want to logout</span>
						
						<form action="logout.php" method="post">
							
						<input type="submit" value="Logout">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">EDIT PROFILE </h3>
						
						
						<form action="editcust.php" method="post"> <!-- onSubmit="return validatp();-->
							<!--<script>
        function validatp(){

            var a = document.getElementById("pass").value;
            var b = document.getElementById("pass1").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>-->
						<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">   
						<p align=left style="color:#1accfd;">Name : <input type="text"  required=""  id='u' required onchange='Validate();' value="<?php echo $row['name'] ?>"  name="nname" ></p>
						
						<script>		
function Validate() 
{
    var val = document.getElementById('u').value;

    if (!val.match(/^[A-Za-z][A-Za-z" "]{2,}$/)) 
    {
        alert('Invalid name');
		            document.getElementById('u').value = "";
        return false;
    }

    return true;
}
                       </script>   
					
						
						<p align=left style="color:#1accfd;">Phone Number : <input type="text"  required=""value="<?php echo $row['ph_no'] ?>"  name="nphno" ></p>
						<!--<input type="number" placeholder="<?php 
					//	echo $row['phone_number'] ?>"  name="nphno" id="pas" required=''>-->
					     
					</div>

							<!--<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>-->
							
						
						<input type="submit" value="Save changes">
						<a href="#" data-toggle="modal" data-target="#myModal4">
						      Change Password</a>
							 <i>|</i>
							  <a href="index1.php" > Cancel </a>
						     
							  
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">CHANGE PASSWORD </h3>
						
						
						<form action="editpassword.php" method="post" onSubmit="return validatp();">
							<script>
        function validatp(){
 
            var a = document.getElementById("pass").value;
            var b = document.getElementById("pass1").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
						<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">   
						
						
					</div>
						
						<p align=left style="color:#1accfd;">Enter Current Password: <input type="password" required="" value="current Password"  name="pword" id="pas" > </p> 
						<p align=left style="color:#1accfd;">Enter New Password: <input type="password" required="" value="New Password"  name="password1" id="pass" > </p> 
					
						<p align=left style="color:#1accfd;">Confirm password: <input type="password" required=""  value="confirm Password"  name="cpassword" id="pass1" > </p> 
						
						
						<input type="submit" value="Save changes">
						<i>|</i>
						 <a href="index1.php" >
						      Cancel </a>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	
	<div class="ban-top">
		<div class="container">
					<?php
				if(isset($_GET['Message'])){
                echo $_GET['Message'];
	
                    }
                 ?>
					
			<div class="agileits-navi_search">
				<form action="#" method="post">
					
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="index.html">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
					
								<li class="dropdown">
									<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Choose with Category
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<?php
							   $con=mysqli_connect("localhost","root","","new_halwa");
								$sql="SELECT * FROM tbl_category WHERE status='1'";
								$result=mysqli_query($con,$sql);
								while($row=mysqli_fetch_assoc($result))
								{
									?>
						     
						       
													<li>
														<a href="productcust.php?id=<?php echo $row['cat_id']; ?>&name=<?php echo $row['cat_name']; ?>"> <?php echo $row['cat_name']; ?>
												
														</a>
													</li>
													<?php  
								}
								
								
							?>
										
												</ul>
								</li>
								
								<li class="">
									<a class="nav-stylehead" href="contactcust.php">Contact</a>
								</li>
		
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						
						
					</div>
				</div>
			</div>
			
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						
						
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			
	     
				<!-- //reviews -->
				<!-- cuisine -->
				<div class="left-side">
					
				</div>
				<!-- //cuisine -->
				<!-- deals -->
				<div class="deal-leftmk left-side">
				
				</div>
				<!-- //deals -->
			</div>
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			
					<i></i>
					<i></i>
					<i></i>
		
		
	<!-- //banner -->

	<!-- top Products -->
	
	<!-- //banner -->

	<!-- top Products -->
	
			<!-- tittle heading -->
			
	     
				<!-- //reviews -->
				<!-- cuisine -->
				
				<!-- //cuisine -->
				<!-- deals -->
				
				<!-- //deals -->
			
		

			<!-- //tittle heading -->
			<!-- product left -->
			
				<!-- //deals -->
				<div class="agileinfo-ads-display col-md-20">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1">
						
															

							<?php
								
								$cl=$co+15;
								for($j=$co;$j<$cl;$j++)
								{
								if($i==0)
								{
									Echo "No Products Exist";
									break;
								}
								
								$sql="SELECT * FROM tbl_product WHERE status='1' AND p_id='$product[$j]'";
								$result=mysqli_query($con,$sql);
				                $row=mysqli_fetch_assoc($result)
				
								
								?>
								<?php
									$q=0;
									$sql6="SELECT * FROM tbl_image WHERE p_id='$product[$j]'";
									$result6=mysqli_query($con,$sql6);
				                     while($row6=mysqli_fetch_assoc($result6))
									 {
										 $image[$q]=$row6['image1'];
										 $q++;
									 }
									?>
									<div class="col-md-4 product-men">
							     <div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
							     <?php echo "<img src= $image[0] height = '200px' width = '200px'>";?>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="singlecust.php? &key=<?php echo $row['p_id'];?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<!--<span class="product-new-top">New</span>-->
								</div>
								<div class="item-info-product ">
									<h4>
										<?php echo $row['p_name']; ?>
									</h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo"Rs:". $row['p_price']; ?></span><br>
										<span class="item_price"><?php  echo "For:". $row['p_weight'];?>kg</span>
										<!--<del>$280.00</del>-->
									</div>
									

								</div>
								</div>
						</div>
								<?php
						if($product[$j]==$last){
							$status=1;
							break;
						}
				}
				?>
				
						<!--<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/m.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Cashew Nuts, 100g</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">$200.00</span>
										<del>$420.00</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Cashew Nuts, 100g" />
												<input type="hidden" name="amount" value="200.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="BOOK NOW" class="button" />							
												</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/m3.jpg" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="single.html" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">New</span>

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">Pista..., 250g</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">$520.99</span>
										<del>$600.99</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Pista, 250g" />
												<input type="hidden" name="amount" value="520.99" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="BOOK NOW" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="clearfix"></div>
					</div>
					
						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					
						<div class="clearfix"></div>
					</div>
					</div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
						<div class="clearfix"></div>
				</div>
				
			
			<!-- //product left -->
			<!-- product right -->
			
						</div>
						<div class="clearfix"></div>
					</div>
					</div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
						<div class="clearfix"></div>
				</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					
	<!-- //top products -->
	<!-- special offers -->
	
	<!-- //newsletter -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			<p class="footer-main">
				<span>"Halwa World"</span> Its an online halwa shop which can buy various halwas from online </p>
			<!-- //footer first section -->
			<!-- footer second section -->
	      	
		<div class="clearfix"></div>
			 </div> 
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign"> </h3>
						<h1>
							<i>Enter your feedback about this site</i>
							
						</h2>
						<form action="feedback.php" method="post">
						    <br>
							
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="message" name="message" required="">
							</div>
							<input type="submit" value="submit">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			
			<!-- //Modal content-->
		
	
				<!-- //social icons -->
				
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			
				<!-- brands -->
				
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu">
					<h5>Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<div class="copy-right">
		<div class="container">
			<p>© 2018 Halwa World. All rights reserved | Design by Rijo  varghese
				
			</p>
		</div>
	</div>

	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
<script>
	(function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }

})(window);
	</script>
	
</body>
</html>
