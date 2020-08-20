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
						
						<form action="index1.php" method="post" onSubmit="return validatp();">
       
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
							<input type="submit" value="close">
						    <a href="#" data-toggle="modal" data-target="#myModal3">
						      Edit Your Profile</a>
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
						<h3 class="agileinfo_sign">Logout </h3>
						
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
	</div><div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
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
						
						
						<form action="editcust.php" method="post" onSubmit="return validatp();">
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
						<p align=left style="color:#1accfd;">Name : <input type="text"  required="" value="<?php echo $row['name'] ?>"  name="nname" ></p>
						<p style="color:#1accfd;">Email: <input type="text"  required="" class="field left" readonly placeholder="<?php echo $row['email'] ?>"name="emailid"  ></p>
						<p style="color:#1accfd;">Phone Number : <input type="text"  required=""value="<?php echo $row['ph_no'] ?>"  name="nphno" ></p>
						<!--<input type="number" placeholder="<?php 
					//	echo $row['phone_number'] ?>"  name="nphno" id="pas" required=''>-->
					    <h4 class="agileinfo_sign">Change Password </h4>
						
						<p style="color:#1accfd;">Enter Current Password: <input type="password" required="" value="current Password"  name="password" id="pas" > </p> 
						<p style="color:#1accfd;">Enter New Password: <input type="password" required="" value="New Password"  name="password" id="pas" > </p> 
						<!--<br>Enter New Phonenumber: <input type="password" placeholder="New Phonenumber"  name="nphno" > </h3> -->
						<p style="color:#1accfd;">Confirm password: <input type="password" required=""  value="confirm Password"  name="cpassword" id="pas1" > </p> 
						<!--<br>Enter New Phonenumber: <input type="password" placeholder="New Phonenumber"  name="nphno" > </h3> -->
						
						
					</div>

							<!--<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>-->
							
						<input type="submit" value="Save changes">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>