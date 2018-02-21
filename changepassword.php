<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>
<head>
<title>Expenses Tracker</title>
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

<script src='js/jquery.dataTables.min.js'></script>
<link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<script>
        $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });
    </script>
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
		<?php
			if(isset($_POST["btnpassword"]))
			{
				$oldpassword=$_POST["oldpassword"];
				$newpassword=$_POST["newpassword"];
				$cnfrmpassword=$_POST["cnfrmpassword"];
				$email=$_SESSION["email"];
				if($newpassword==$cnfrmpassword)
				{

					$res=$obj->checkpassword($email,$oldpassword);
					$cnt=mysql_num_rows($res);
					if($cnt==1)
					{
						$res1=$obj->changepassword($email,$newpassword);
						if($res1==1)
						{
							header('Location:home.php');
						}
						else
						{
							echo '<script>alert("Not Sucefully done"); </script>';
						}
					}
					else
					{
						echo '<script>alert("Old Password is Wrong ! Try Again"); </script>';
				
					}

				}
				else
				{
					echo '<script>alert("Password doesnt match ! Try Again"); </script>';
				}

			}


		?>

		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Change Password</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Change Password</h4>
					</div>
					<div class="login-body">
						<form action="changepassword.php" method="post">
							<input type="password" class="user" name="oldpassword" placeholder="Enter your Old Password" required>
							<input type="password" name="newpassword" class="lock" placeholder="Enter Your New Password">
							<input type="password" name="cnfrmpassword" class="lock" placeholder="Re-confirmPassword">

							<input type="submit" name="btnpassword" value="Change Password">
							
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
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