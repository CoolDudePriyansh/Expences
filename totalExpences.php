<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
		

		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Your Total Expences 
						<a href="addExpences.php"><input style="height:50px; width:200px; border-radius:10px; font-size:20px; float:right;" type="button" value="Add New Expences" title="Add New Expences" class="btn-danger" title="Add New Expences"></a>
					</h3>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<table id ="dataTable" class="table table-hover" > 
							<thead> 
								<tr> 
									<th>Expences Name</th> 
									<th>Amount</th> 
									<th>Category</th> 
									<th>Delete</th> 
								</tr> 
							</thead> 
							<tbody> 
								<?php
												
									$obj=new Database();
									$res=$obj->listAll($email);
									while($row=mysql_fetch_assoc($res))
									{
										echo '<tr>';
										echo '<td><font size="3" color="black">'.$row["expences_name"].'</font>';
										echo '<td><font size="3" color="black">'.$row["expences_amnt"].'</font>';
										echo '<td><font size="3" color="black">'.$row["cat_name"].'</font>';
										echo '<td><a href="expencedel.php?id='.$row["expences_id"].'"><button style="background-color: #FF6347" type="button" class="btn btn-info" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>';
										echo '</tr>';
									}						
				
								?>	 
							</tbody> 
						</table>
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