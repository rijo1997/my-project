
<!DOCTYPE html>
<html lang="zxx">

<head>
<?php
$i=0;
session_start();


$con = mysqli_connect("localhost","root","",'new_halwa');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

	
			


?>
	<title>Halwa store an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="TYRE STORE Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p> Top Deals & Discounts</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	
			
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="#">
						
						<img src="images/log.jpg" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			
				<!-- //header lists -->
				<!-- search -->
				
				<!-- //search -->
				<!-- cart details -->
				
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

	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
<!-- Modal2 -->

			<!-- //Modal content-->

			<!-- header-bot -->
			
	<!-- //navigation -->
	<!-- banner -->
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index1.php">Back To Home</a>
						<i></i>
					</li>
					<li></li>
				</ul>
			</div>
		</div>
	</div>
<div class="clearfix"></div>
		<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Checkout
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			
			<!-- //tittle heading -->
			<div class="checkout-right">
			<?php
			
			
		
$con = mysqli_connect("localhost","root","",'new_halwa');


// Check connection


	//echo "connection succeefull";






if($_SESSION['ssid']=session_id())

{
	$email=$_SESSION['username'];
	
	$sql="select * from signup where email='$email'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
					
						$r1=$row['cust_id'];

}
	    $sqldw="SELECT * FROM tbl_cart WHERE status='1'";
								$resultdw=mysqli_query($con,$sqldw);
								$w=0;
				            while($rowdw=mysqli_fetch_assoc($resultdw))
							{   
								
								
								
								
								if($r1==$rowdw['cust_id'])
									$w++;
							}
							?>
			<div class="checkout-right">
				<h4>My Cart
					<span> (<?php if($w!=0) { echo $w; } else { echo "0"; }  ?>) </span>
				</h4>
					<?php
						if($w>0)
						{
							?>
						
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product Image</th>
								
								<th>Product Name</th>
                                <th>weight(in k.g)</th>
								<th>k.g*Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<?php
								//$h=8;
								$sql25="SELECT MAX(cart_id) AS max FROM tbl_cart";
								$res=mysqli_query($con,$sql25);
								$row25=mysqli_fetch_assoc($res);
								$m=$row25['max'];
								$c=0;

								$sqld="SELECT * FROM tbl_cart WHERE status='1'";
								$resultd=mysqli_query($con,$sqld);
								
				            while($rowd=mysqli_fetch_assoc($resultd))
							{   
								
								
								
								
								if($r1==$rowd['cust_id'])
								{	$c++;
									$p_id=$rowd['p_id'];
									$qnty=$rowd['weight'];
								    $wp=$rowd['totalwp'];
									
								
								$sql21="SELECT * FROM tbl_product WHERE status='1' AND p_id='$p_id'";
								$result21=mysqli_query($con,$sql21);
				                $row21=mysqli_fetch_assoc($result21);
									$all=$row21['max_weight'];
							
									$q=0;
									$sql6="SELECT * FROM tbl_image WHERE p_id='$p_id'";
									$result6=mysqli_query($con,$sql6);
				                     while($row6=mysqli_fetch_assoc($result6))
									 {
										 $image[$q]=$row6['image1'];
										 $q++;
									 }
								
							
									?>
						
					
						<tbody>
							<tr class="rem1">
								<td class="invert"><?php echo "$c"; ?></td>
								<td class="invert">
									<a href="singlecust.php? &key=<?php echo $rowd['p_id']; ?>">
									<?php echo "<img src= $image[0] height = '100px' width = '100px'>";?>
									</a>
								</td>
								<td class="invert"><?php $pname1=$row21['p_name']; $price1=$row21['p_price']; echo $row21['p_name']; ?></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<a href="minus.php?q=<?php echo $qnty; ?>&pr=<?php echo $p_id; ?>&cos=<?php echo $row21['p_price']; ?>"><div class="entry value-minus">&nbsp;</div></a>
											<div class="entry value">
									      <span><?php if($qnty <= $all) { echo "$qnty"; } else { echo "$all"; } ?> </span>
											</div>
										<a href="plus.php?q=<?php echo $qnty; ?>&pr=<?php echo $p_id; ?>&cos=<?php echo $row21['p_price']; ?>"	<div class="entry value-plus active">&nbsp;</div></a>
										</div>
										<!--<input type="number" name="qnty" value=<?php echo "$qnty"; ?> >-->
										</div>
											
								</td>
								
								<td class="invert"><?php echo"Rs. ". $rowd['totalwp']; ?></td>
								<td class="invert">
									<div class="rem">
									<a href="close.php?pr=<?php echo $p_id; ?>">	<div class="close1"> </div></a>
									</div>
								</td>

						
							</tr>
							
										
									<?php
									}
								
							/*	else
								{
									//echo"hai";
									$h++;
									
								}*/
				/*		if($product[$j]==$last){
							$status=1;
							break;
						}
				}*/
				}
				/*if($m==$h)
				{
					 echo "<script>alert('No products in the cart');document.location='customer.php';</script>";

				}*/
				?>
							<!--<tr class="rem2">
								<td class="invert">2</td>
								<td class="invert-image">
									<a href="single2.html">
										<img src="images/s6.jpg" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								
							</tr>
							<tr class="rem3">
								<td class="invert">3</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="images/s5.jpg" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value">
												<span>1</span>
											</div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</td>
								
							</tr>-->
						</tbody>
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><h3>Grand Total</h3></td>
						<th><h3><?php
$sql5="SELECT SUM(totalwp) AS total
FROM tbl_cart
WHERE cust_id='$r1' AND weight IS NOT NULL";
$result5=mysqli_query($con,$sql5);
$r5=mysqli_fetch_array($result5);
	//{
		$tot=$r5['total'];
	
	
	if(mysqli_query($con,$sql5))
{
	//echo "$total";
	//header("Location: checkout.php?total=$tot");
	//echo "<script>alert('$tot');document.location='checkout.php';</script>";
}						//$total=$_GET['total']; 
echo "Rs. ".$tot; ?></h3></th>
						<td></td>
						</tr>
						
					</table>
				</div>
	
			</div>
			
			<div class="checkout-left">
				<div class="address_form_agile">
				
					<h4>Shipping Address </h4>
					<form action="order.php" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls">
									
										<input class="billing-address-name" type="text" name="name" placeholder=" First Name" id='e' required onchange='Validates();'>
										<script>		
function Validates() 
{
    var val = document.getElementById('e').value;

      if (!val.match(/^[A-Za-z][A-Za-z" "]{2,}$/)) 
    {
        alert('Invalid name');
		            document.getElementById('e').value = "";
        return false;
    }


    return true;
}

</script>
									</div>
									        <div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Last Name" name="lname" id='o' required onchange='Validatess();'>
												<script>		
function Validatess() 
{
    var val = document.getElementById('o').value;

      if (!val.match(/^[A-Za-z][A-Za-z" "]{2,}$/)) 
    {
        alert('Invalid name');
		            document.getElementById('o').value = "";
        return false;
    }


    return true;
}

</script>
											</div>
										</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Mobile Number" name="phno" id='c' required onchange='Validat();'>
												<script>		
function Validat() 
{
    var val = document.getElementById('c').value;

    if (!val.match(/^[789]\d{9}$/))
    {
        alert('Invalid mobile number');
	
		
		            document.getElementById('c').value = "";
        return false;
    }

    return true;
}

</script>
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="House Name" name="hname" required="">
												
											</div>
										</div>
										
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="Pin Code" name="pcode" id='f' required onchange='Validat1();'>
												<script>		
function Validat1() 
{
    var val = document.getElementById('f').value;

      if (!val.match(/^\d{6}$/))
    {
        alert('Invalid pin code number');
	
		
		            document.getElementById('f').value = "";
        return false;
    }

    return true;
}

</script>
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
											<div class="controls">
												<input type="text" placeholder="City" name="city" required="">
											</div>
										</div>
										
										<div class="clear"> </div>
									</div>
									
									<div class="controls">
									
										<select class="option-w3ls" placeholder="District" name=district id=district required="">
										 <option>choose a District</option>
										<?php
                             $conn = mysqli_connect("localhost","root","",'new_halwa');

                             if (!$conn) {
                             die("Connection failed: " . mysqli_connect_error());
                               }



								$sql="SELECT * FROM tbl_district WHERE status='1'";
								$result=mysqli_query($conn,$sql);
		                        while($row=mysqli_fetch_assoc($result))
								{
								?>
								 <option value="<?php echo $row['dis_id']; ?>" ><?php echo $row['d_name']; ?></option>
								<?php  
								}
								
								
							?>
											
										</select>
									</div>
								</div>
								<input type="hidden" name="tot_price" value="<?php echo $tot;?>"/>
							
								<input type="submit" name="address" value="Place Order" class="button" />
							</div>
						</div>
					</form>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
					<?php
	}
	?>		<div class="clearfix"></div>
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
	      	<!-- //quick links -->
				<!-- social icons -->
			
				<!-- //social icons -->
				
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
	<!-- //footer -->
	<!-- copyright -->
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

</body>

</html>