<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>
<head>
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Blank Page :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

<!-- <script src='js/jquery.dataTables.min.js'></script>
<link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">
 --><!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	
	<div class="main-content">
		<!--left-fixed -navigation-->
		<?php 
			include('sidebar.php');
		?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		
		<?php 

			include('header.php');

		?>

		<!-- //header-ends -->
		<!-- main content start-->
		

	<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"><center>Add Your Daily Expences here</center></h3>
				<div class="sign-up-row widget-shadow">

					<form action="#" method="post" enctype="multipart/form-data">
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Expences Name* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" name="txtname" placeholder="Type Your Name" required>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Amount* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text"  name="txtemail" placeholder="Type Your Email ID"  required>
							
						</div>
						<div class="clearfix"> </div>
					</div>					
					
					<div class="sub_home">
						
						<input type="submit" value="Submit" name="btnsignup">
						
						<div class="clearfix"> </div>
					</div>
				</form>
				</div>
			</div>
		</div>	

		<!--footer-->

		<?php 

			include('footer.php');

		?>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>



</html>