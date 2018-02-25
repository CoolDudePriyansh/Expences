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
		
<?php 
if(isset($_POST["btnAddExpences"]))
{
	$name=$_POST["txtname"];
	$amount=$_POST["txtamount"];
	$cat=$_POST["cat"];
	$day=$_POST["day"];
	$month=$_POST["month"];
	$_SESSION["email"]=$email;
	$res=$obj->getid($email);
	while($row=mysql_fetch_assoc($res))
	{	
		$user_id=$row["user_id"];
	}
	$_SESSION["user_id"]=$user_id;
		

	$res=$obj->addExpences($name,$cat,$user_id,$amount,$day,$month);
	if($res==1)
	{
		header('Location:totalExpences.php');
	}
	else
	{
		echo"something went wrong";
	}
			
}
?>
	<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1"><center>Add Your Daily Expences here</center></h3>
				<div class="sign-up-row widget-shadow">

					<form action="addExpences.php" method="post" >
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Expences Name* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" name="txtname" placeholder=" Expense Name" required>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Amount* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" name="txtamount" placeholder="Expense Amount"  required>
							
						</div>
						<div class="clearfix"> </div>
					</div>	

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Category* :</h4>
						</div>
						<div class="sign-up2">
								<select name="cat" class="form-control">
									<?php
									$obj=new database();
									$res=$obj->getAllCat();
									while($row=mysql_fetch_array($res,MYSQL_ASSOC))
									{
										echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
									}
									?>		
								</select>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Day* :</h4>
						</div>
						<div class="sign-up2">
							
								<select name="day" class="form-control">
									<option value="01">1</option>
									<option value="02">2</option>
									<option value="03">3</option>
									<option value="04">4</option>
									<option value="05">5</option>
									<option value="06">6</option>
									<option value="07">7</option>
									<option value="08">8</option>
									<option value="09">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>					
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Month* :</h4>
						</div>
						<div class="sign-up2">
							
								<select name="month" class="form-control">
									<option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">November</option>
									<option value="December">December</option>									
							</select>	
						</div>
						<div class="clearfix"> </div>
					</div>	

					<div class="sub_home">
						
						<input type="submit" value="Add" name="btnAddExpences">
						
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