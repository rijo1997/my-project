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

	 



$key=$_GET['key'];
if(isset($_GET['Search']))
{
	$search=$_GET['Search'];
   
}
$sql="SELECT * FROM tbl_product WHERE Status='1' AND P_id='$key'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);



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
					<a href="index.php">
						
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
						<span class="fa fa-phone" aria-hidden="true"></span> 812 986 5710
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li>
				
					
			
				</ul>
				<!-- //header lists -->
				<!-- search -->
				
				<!-- //search -->
				<!-- cart details -->
				
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
					<a href="#" data-toggle="modal" data-target="#myModal5">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button></a>
						</form>
					</div>
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
	<div class="modal fade" id="myModal5" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					
					<div class="modal_body_left modal_body_left1">
						<span class="item_price">You have to sign in before adding products to cart </span>
						
						<form action="#" method="post">
							
						<input type="submit" value="Close">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
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
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's start your Halwa shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="signin.php" method="post"> 
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="email" id='e' required onchange='Validat3();'>
								
									<script>		
function Validat3() 
{
    var val = document.getElementById('e').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/))
    {
        alert('Invalid email');
		
		     document.getElementById('e').value = "";
        return false;
    }

    return true;
}

</script>
				
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password11" required="">
							</div>
							<input type="submit" value="Sign In">
							<a href="#" data-toggle="modal" data-target="#myModal4">
								Forgot your password</a>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
<!-- Modal2 -->
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
						<h3 class="agileinfo_sign">Forgot Password </h3>
						
						<form action="forgotpass.php" method="post"> 
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="em" id='i' required onchange='Validat4();'>
								
									<script>		
function Validat4() 
{
    var val = document.getElementById('i').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/))
    {
        alert('Invalid email');
		
		     document.getElementById('i').value = "";
        return false;
    }

    return true;
}

</script>
				
							</div>
						
							<input type="submit" value="Submit">
							
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
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Halwa store! Let's set up your Account.
						</p>
						<form action="signup.php" method="post" onSubmit="return validatp();">
						<script>
        function validatp(){

            var a = document.getElementById("passw").value;
            var b = document.getElementById("cpassw").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="name" id='u' required onchange='Validate();'>
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
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="email" id='f' required onchange='Validat2();'>
								
									<script>		
function Validat2() 
{
    var val = document.getElementById('f').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/))
    {
        alert('Invalid email');
		
		     document.getElementById('f').value = "";
        return false;
    }

    return true;
}

</script>
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Phone No" name="phno" id='c' required onchange='Validat();'>
								
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
	<!--				<form onSubmit="return validatp();" ">		!-->
							<div class="styled-input">
							
								<input type="password" placeholder="Password" name="password" id="passw" required="">
								
							


							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="cpassword" id="cpassw" required="">
								
						<!--		<script>		
function Validatz2() 
{
    var val = document.getElementById('pass3').value;

if (!val.match(/^(?=.*\d)(?=.*[A-Z]).{6,10}$/)) 
    {
        alert('Password should contain atleast a character and a Number with length atleast 6 and atmost 10');
		
		     document.getElementById('pass3').value = "";
        return false;
    }

    return true;
}

</script>!-->
							</div> 
							
							
							<input type="submit" value="Sign Up">
							
						</form>
						
						<p>
							<a href="index.php">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->

	
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
								<li class="">
									<a class="nav-stylehead" href="index.php">Home
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
														<a href="productcat.php?id=<?php echo $row['cat_id']; ?>&name=<?php echo $row['cat_name']; ?>"> <?php echo $row['cat_name']; ?>
												
														</a>
													</li>
													<?php  
								}
								
								
							?>
										
												</ul>
								</li>
								
								
								<li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li>
		
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner-2 -->
	
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						
				</ul>
			</div>
		</div>
	</div>
	
	<!-- //page -->
	<!-- Single Page -->
		<div class="container">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="col-md-4 single-right-left 12">
				<div class="grid images_1_of_2">
				<?php
					$sql2="SELECT * FROM tbl_image WHERE p_id='$key'";
					$result2=mysqli_query($con,$sql2);
					?>
					<div class="flexslider">
						
						<?php
						while($row2=mysqli_fetch_array($result2))
						{
						?>
							<div data-thumb="<?php echo $row2['image1'];?>alt=" " 
								<div class="thumb-image">
									<img src="<?php echo $row2['image1']; ?>"" data-imagezoom="true" class="img-responsive" alt="" height=100 width=200> </div>
						
							<?php
						}
					    ?>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
			<?php
					$sql3="SELECT * FROM tbl_product WHERE p_id='$key'";
					$result3=mysqli_query($con,$sql3);
                    $row3=mysqli_fetch_assoc($result3);
					?>
				<h3><?php echo $row3['p_name']; ?></h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<br>
				
				<br>
			     <div>
				
				  
Select weight in kg:
<select name="product_qty">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</div
				
				<br>
				
                 <span class="item_price"><?php  echo "For:". $row3['p_weight'];?> kg</span>
				<p>
					<span class="item_price"><?php echo"Rs:". $row3['p_price']; ?></span>
					<br>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Shipping Speed to Delivery.
						</li>
						
						
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>Product 
						<label>Description</label></p>
					
							<h4><?php echo $row3['p_dec']; ?></h4>
						
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All food products are
						<label>non-returnable.</label>
					</p>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="cartcheck.php" method="POST">
							<fieldset>
								
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
							
						</form>
					</div>
					
				</div>
	
			<div>
			
	
                
			
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!-- //Single Page -->
	<!-- special offers -->
	
			<!-- tittle heading -->
		

<br>
<br>	<!-- newsletter -->
	<div class="footer-top">
		
	</div>
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
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

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

	<!-- imagezoom -->
	<script src="js/imagezoom.js"></script>
	<!-- //imagezoom -->

	<!-- FlexSlider -->
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

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
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>