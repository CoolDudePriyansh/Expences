<?php 
	session_start();
	if(isset($_SESSION["email"])=="")
	{
		header('Location:index.php');
	}
	else
	{
		$email=$_SESSION["email"];
	}
	require 'database.php';
	$obj=new database();
?>
									<?php 
									
										$res1=$obj->getUserByEmail($email);
										$cnt=mysql_num_rows($res1);

										if($cnt==1)
										{
											while($row=mysql_fetch_assoc($res1))
											{	
												$photo=$row["user_photo"];
												$name=$row["user_name"];
											}
										}
									?>
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="home.php">
						<h1>Expence</h1>
						<span>&nbsp;&nbsp;Tracker&nbsp;&nbsp;</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
						<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
				<!--notifications of menu start -->
					<?php 
						include('notification.php');
					?>

				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img">
										<img height=50 width=50 alt="" style="border-radius: 50px;" src="<?php echo $photo;?>"> 
									</span> 
									<div class="user-name">
										<p><?php echo $name;?></p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="changepassword.php"><i class="fa fa-user"></i> Change Password</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>