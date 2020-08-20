<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<?php
$i=0;
session_start();
include 'conn.php';
$id=$_SESSION["id"];
$sql="SELECT * FROM tbl_product WHERE Register_id='$id' AND Status='1' ORDER BY P_id ASC";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$product[$i]=$row['P_id'];
	$i++;
	}
	if($i>0)
	$last=end($product);

$var="My Ads";
$co=0;





?>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Bikes :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
<link rel="stylesheet" href="css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<!-- language-select -->
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
<!-- //language-select -->
<!-- switcher-grid and list alignment -->
<script src="js/tabs.js"></script>	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>
<!-- //switcher-grid and list alignment -->
</head>
<body>	
	<!-- Navigation -->
		
		<!-- //Navigation -->
	<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one--> 
			
			<div class="w3ls-header-right">
				<ul>
				<?php
				
				if(isset($_SESSION['id']))
                    {
						
						$id=$_SESSION["id"];
						$sql="SELECT * FROM tbl_registration WHERE Register_id='$id'";
						$result=mysqli_query($con,$sql);
	                    $row=mysqli_fetch_assoc($result);
						?>
						<li class="dropdown head-dpdn">
						<a href="#" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['Name']; ?></a>
					</li>
						
				<?php		
					}
                else
                    {
				?>
					<li class="dropdown head-dpdn">
						<a href="signin.php" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
					
					<?php
					}
					?>
					<li class="dropdown head-dpdn">
						<a href="help.html"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
					
					<li class="dropdown head-dpdn">
						<div class="header-right">			
	<!-- Large modal -->
			
		</div>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div> 
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index1.php"><span>Re</span>sale</a></h1>
				</div>
					
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="index1.php"><i class="fa fa-home home_1"></i></a> / 
			<a href="categories.php">Categories</a> / 
			<span><?php echo $var; ?></span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Bikes -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
				
				
				<div class="search-product ads-list">
				<span class="hq" style="color:red;font-weight: bold;">
				<?php
				if(isset($_GET['value']))
					echo $_GET['value'];
				?>
				</span>	
				</div>
				<div class="clearfix"></div>
			</div>
			
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								
								
								<div class="clearfix"></div>
								<?php
								
								$cl=$co+15;
								for($j=$co;$j<$cl;$j++)
								{
								if($i==0)
								{
									Echo "No Products Exist";
									break;
								}
								
								$sql="SELECT * FROM tbl_product WHERE Status='1' AND P_id='$product[$j]'";
								$result=mysqli_query($con,$sql);
				                $row=mysqli_fetch_assoc($result)
				
								
								?>
							<ul class="list">
							
								<a href="#" data-toggle="modal" class="identifyingClass" data-target="#myModal2" aria-expanded="false" data-id="<?php echo$row['P_id']; ?>">
									<li>
									<?php
									$q=0;
									$sql6="SELECT * FROM tbl_image WHERE P_id='$product[$j]'";
									$result6=mysqli_query($con,$sql6);
				                     while($row6=mysqli_fetch_assoc($result6))
									 {
										 $image[$q]=$row6['image1'];
										 $q++;
									 }
									?>
									<img src=<?php echo $image[0];   ?> title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $row['P_name']; ?></h5>
									<span class="adprice"><?php echo"Rs:". $row['Price']; ?></span>
									<?php
									$bid=$row['Brand_id'];
									$sqlbrand="SELECT * FROM tbl_brand WHERE Brand_id='$bid'";
                                    $rbrand=mysqli_query($con,$sqlbrand);
                                    $rowbrand=mysqli_fetch_array($rbrand);	
                                    $sid=$rowbrand['S_id'];
                                    $sqlbrand="SELECT * FROM tbl_sub_category WHERE S_id='$sid'";
                                    $rbrand=mysqli_query($con,$sqlbrand);
                                    $rowsub=mysqli_fetch_array($rbrand);	 									
									
									?>
									<p class="catpath"><font color="blue"><?php echo $rowsub['S_name']; ?> »<?php echo $rowbrand['Brand_name']; ?></font></p>
									</section>
									<section class="list-right">
									<span class="date"><?php echo$row['Date']; ?></span>
									<?php
									$reg=$row['Register_id'];
									$sqlbrand="SELECT * FROM tbl_registration WHERE Register_id='$reg'";
                                    $rbrand=mysqli_query($con,$sqlbrand);
                                    $rowr=mysqli_fetch_array($rbrand);
									?>
									<span class="cityname"><?php echo$rowr['Landmark']; ?></span>
									<span class="cityname"><?php echo$row['Views']; ?> Viewers</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<?php
						if($product[$j]==$last){
							$status=1;
							break;
						}
				}
				?>
								
							</ul>
						</div>
							</div>
						</div>
						<div class="modal fade" id="myModal2" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h1><a href="index.html"><span style="color:blue;font-weight: bold;">Feedback</span></a></h1>		
										<p class="get-pw">Remove Your Adv</p>
										<form action="removead.php" method="post">
										
										<textarea class="mess" id="ITSWUsers" name="disc" style="width: 440px; height: 100px;margin: 0 auto;"  placeholder="Enter your Feedback" required=" " onchange="Validate()"  ></textarea>
											<h1><a href="index.html"><span style="color:blue;font-weight: bold;">OR</span></a></h1>	
											<select id="user" name="user" style="width: 440px; height: 50px;margin: 0 auto;" onChange="getfeedback(this.value);"  >
                            <option style="background-color: grey;font-weight: bold;">Select a feedback</option>
							 <option value="Portal is very useful">Portal is very useful</option>
							 <option value="satisfactory">satisfactory</option>
                           <option value="It is not working correctly">It is not working correctly</option>
						   
						   <option value="Completly worst">Completly worst</option>
						   </select>
						   <br>
						   <br>
					
					<br>
					<script type="text/javascript">
    $(function () {
        $(".identifyingClass").click(function () {
            var my_id_value = $(this).data('id');
             $(".modal-body #hiddenValue").val(my_id_value);
        })
    });
</script>
					<script>
 function getfeedback(f)
 {
	document.getElementById('ITSWUsers').value = f; 
 }
  var usernamecheck = /^[A-Za-z, ]{3,1000}$/;

  function Validate()
  {
    var val = document.getElementById('ITSWUsers').value;
    var lines = val.split('\n');

    for(var i = 0; i < lines.length; i++)
    {
      if(!lines[i].match(usernamecheck))
      {
        alert ('Invalid input: ' + lines[i] + '.  Please write the discription in the correct format (with  full stops).');
		document.getElementById('ITSWUsers').value = "";
        return false;
      } 
    }

    
  }
</script>
                        <br>
						                       <div class="modal-body">
           
            <input type="hidden" name="hiddenValue" id="hiddenValue" value="" />
        </div>
											<input type="submit" value="Remove" style="width: 100px; height: 50px;margin: 0 auto;" name="remove">
										</form>
									</div>
								</div>
							</div>
							</div>
						</div>
						
						
						
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Bikes -->
	<!--footer section start-->		
		<footer>
			<div class="w3-agileits-footer-top">
				<div class="container">
					<div class="wthree-foo-grids">
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Who We Are</h4>
							<p>ReSale connects local people to buy, sell or exchange used goods and services by making it fast and easy for anyone to post a listing through their mobile phone or on the web</p>
							
						</div>
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Help</h4>
							<ul>
								<li><a href="howitworks.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>How it Works</a></li>						
								<li><a href="sitemap.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sitemap</a></li>
								<li><a href="faq.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Faq</a></li>
								<li><a href="feedback.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Feedback</a></li>
								<li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact</a></li>
								<li><a href="typography.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Short codes</a></li>
								<li><a href="icons.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Icons Page</a></li>
							</ul>
						</div>
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Information</h4>
							<ul>
								<li><a href="regions.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Locations Map</a></li>	
								<li><a href="terms.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Terms of Use</a></li>
								<li><a href="popular-search.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Popular searches</a></li>	
								<li><a href="privacy.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Privacy Policy</a></li>	
							</ul>
						</div>
						<div class="col-md-3 wthree-footer-grid">
							<h4 class="footer-head">Contact Us</h4>
							<span class="hq">Ajish V Nair</span>
							<address>
								<ul class="location">
									<li><span class="glyphicon glyphicon-map-marker"></span></li>
									<li>Amal jyothi college of engineering</li>
								</ul>	
								<div class="clearfix"> </div>
								<ul class="location">
									<li><span class="glyphicon glyphicon-earphone"></span></li>
									<li>+91 7034004261</li>
								</ul>	
								<div class="clearfix"> </div>
								<ul class="location">
									<li><span class="glyphicon glyphicon-envelope"></span></li>
									<li><a href="mailto:info@example.com">ajishvnair@mca.ajce.in</a></li>
								</ul>						
							</address>
						</div>
						<div class="clearfix"></div>
					</div>						
				</div>	
			</div>	
			<div class="agileits-footer-bottom text-center">
			<div class="container">
				<div class="w3-footer-logo">
					<h1><a href="index.html"><span>Re</span>sale</a></h1>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		</footer>
        <!--footer section end-->
</body>
		<!-- Navigation-JavaScript -->
			<script src="js/classie.js"></script>
			<script src="js/main.js"></script>
		<!-- //Navigation-JavaScript -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</html>