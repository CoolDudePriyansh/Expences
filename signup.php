<?php 
	session_start();
	require 'database.php';
	$obj=new database();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<?php 

if(isset($_POST["btnsignup"]))
{
	$email=$_POST["txtemail"];
	$name=$_POST["txtname"];
	$pwd=$_POST["txtpassword"];
	$repwd=$_POST["txtrepassword"];
	$gender=$_POST["txtgender"];
	//$photo="null";
	$photo="userphoto/".basename($_FILES["txtphoto"]["name"]);
	$ext=pathinfo($photo,PATHINFO_EXTENSION);
		
	if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
	{
		if(move_uploaded_file($_FILES["txtphoto"]["tmp_name"],$photo))
		{		
			if($pwd==$repwd)
			{			
				$res=$obj->signup($name,$email,$pwd,$photo,$gender);
				if($res==1)
				{
					$_SESSION["email"]=$email;
					header('Location:home.php');
				}
				else
				{
					echo"something went wrong";
				}
			}
			else
			{
				echo "Invalid Password and Confirm Password";
			}		
		}
	}
}
	
  
?>
<body>
<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">SignUp Here</h3>
				<div class="sign-up-row widget-shadow">

					<form action="#" method="post" enctype="multipart/form-data">
					<h5>Personal Information :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Name* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" name="txtname" placeholder="Type Your Name" required>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Email Address* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text"  name="txtemail" placeholder="Type Your Email ID"  required>
							
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Gender* :</h4>
						</div>
						<div class="sign-up2">
							<label>
								<input type="radio" value="Male" name="txtgender" required checked="true">
								Male
							</label>
							<label>
								<input type="radio" value="Female" name="txtgender" required>
								Female
							</label>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4>Photo* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="file" name="txtphoto">
							
						</div>
						<div class="clearfix"> </div>
					</div>

					<h6>Login Information :</h6>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Password* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="password" name="txtpassword" placeholder="Type Your Password"  required>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Confirm Password* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="password" name="txtrepassword" placeholder="Type Your Password Again"  required>
							
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
	</body>
</html>