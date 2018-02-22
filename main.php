<?php 	
	$user_id=$_SESSION["user_id"];
	$date=(int)date("d");								
	$res=$obj->getTodayExpences($user_id,$date);
	$cnt=mysql_num_rows($res);
	$sum=0;

	if($cnt>=1)
	{
		while($row=mysql_fetch_assoc($res))
		{	
			$sum=$sum+$row["expences_amnt"];
		}							
	}	
?>
<?php 									
	//$user_id=$_SESSION["user_id"];
	$month=date("F");								
	$res=$obj->getThisMonthExpences($user_id,$month);
	$cnt=mysql_num_rows($res);
	$tot=0;

	if($cnt>=1)
	{
		while($row=mysql_fetch_assoc($res))
		{	
			$tot=$tot+$row["expences_amnt"];
		}							
	}	
?>
<?php 									
	//$user_id=$_SESSION["user_id"];
	$res=$obj->getTotalExpences($user_id);
	$cnt=mysql_num_rows($res);
	$final=0;

	if($cnt>=1)
	{
		while($row=mysql_fetch_assoc($res))
		{	
			$final=$final+$row["expences_amnt"];
		}							
	}	
?>
<?php 									
	//$user_id=$_SESSION["user_id"];
	$res=$obj->getExpenceByMonth($user_id);
	$cnt=mysql_num_rows($res);
	$no1=0;$no2=0;$no3=0;$no4=0;$no5=0;$no6=0;
	$no7=0;$no8=0;$no9=0;$no10=0;$no11=0;$no12=0; 

	if($cnt>=1)
	{
		while($row=mysql_fetch_assoc($res))
		{	
			$month=$row["month"];
			if($month=="January")
				$no1=$no1+$row["expences_amnt"];
			if($month=="February")
				$no2=$no2+$row["expences_amnt"];
			if($month=="March")
				$no3=$no3+$row["expences_amnt"];
			if($month=="April")
				$no4=$no4+$row["expences_amnt"];
			if($month=="May")
				$no5=$no5+$row["expences_amnt"];
			if($month=="June")
				$no6=$no6+$row["expences_amnt"];
			if($month=="July")
				$no7=$no7+$row["expences_amnt"];
			if($month=="August")
				$no8=$no8+$row["expences_amnt"];
			if($month=="September")
				$no9=$no9+$row["expences_amnt"];
			if($month=="October")
				$no10=$no10+$row["expences_amnt"];
			if($month=="November")
				$no11=$no11+$row["expences_amnt"];
			if($month=="December")
				$no12=$no12+$row["expences_amnt"];
		}							
	}	
?>
<?php 									
	//$user_id=$_SESSION["user_id"];
	$res=$obj->getCategoryByExpence($user_id);
	$cnt=mysql_num_rows($res);
	$cat1=0;$cat2=0;$cat3=0;$cat4=0;$cat5=0;$cat6=0;$cat7=0;$cat8=0; 

	if($cnt>=1)
	{
		while($row=mysql_fetch_assoc($res))
		{	
			$cat=$row["cat_name"];
			if($cat=="Petrol")
				$cat1=$cat1+$row["expences_amnt"];
			else if($cat=="Food")
				$cat2=$cat2+$row["expences_amnt"];
			else if($cat=="Bills")
				$cat3=$cat3+$row["expences_amnt"];
			else if($cat=="EMI")
				$cat4=$cat4+$row["expences_amnt"];
			else if($cat=="Entertaiment")
				$cat5=$cat5+$row["expences_amnt"];
			else if($cat=="Shopping")
				$cat6=$cat6+$row["expences_amnt"];
			else if($cat=="Travel")
				$cat7=$cat7+$row["expences_amnt"];
			else if($cat=="Other")
				$cat8=$cat8+$row["expences_amnt"];

		}							
	}	
?>

		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Today</h5>
							<h4>Expences</h4>
						</div>
						<div class="stats-right">
							<label> <?php echo $sum; ?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>This Month</h5>
							<h4>Expences</h4>
						</div>
						<div class="stats-right">
							<label><?php echo $tot;?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Expences</h4>
						</div>
						<div class="stats-right">
							<label><?php echo $final;?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>
				<div class="charts">
					<div class="col-md-4 charts-grids widget">
						<h4 class="title">First Six Month Expences</h4>
						<canvas id="bar" height="400" width="400"> </canvas>
					</div>

					<div class="col-md-4 charts-grids widget states-mdl">
						<h4 class="title">Last Six Month Expences</h4>
						<canvas id="line" height="400" width="400"> </canvas>
					</div>

					<div class="col-md-4 charts-grids widget">
						<h4 class="title">Categorywise Expences</h4>
						<canvas id="pie" height="400" width="400"> </canvas>
					</div>

					<div class="clearfix"> </div>
							 <script>
								var barChartData = {
									labels : ["Jan","Feb","Mar","April","May","June"],
									datasets : [
										{
											fillColor : "rgba(233, 78, 2, 0.9)",
											strokeColor : "rgba(233, 78, 2, 0.9)",
											highlightFill: "#e94e02",
											highlightStroke: "#e94e02",
											data : [<?php echo $no1;?>,<?php echo $no2;?>,<?php echo $no3;?>,<?php echo $no4;?>,<?php echo $no5;?>,<?php echo $no6;?>]
										}	
										]
									
								};
								var lineChartData = {
									labels : ["July","Aug","Sep","Oct","Nov","Dec"],
									datasets : [
										{
											fillColor : "rgba(242, 179, 63, 1)",
											strokeColor : "#F2B33F",
											pointColor : "rgba(242, 179, 63, 1)",
											pointStrokeColor : "#fff",
											data : [<?php echo $no7;?>,<?php echo $no8;?>,<?php echo $no9;?>,<?php echo $no10;?>,<?php echo $no11;?>,<?php echo $no12;?>]
										}
									]
									
								};
								var pieData = [
										{
											value: <?php echo $cat1;?>,
											color:"rgba(233, 78, 2, 1)",
											label: "Petrol"
										},
										{
											value : <?php echo $cat2;?>,
											color : "rgba(242, 179, 63, 1)",
											label: "Food"
										},
										{
											value : <?php echo $cat3;?>,
											color : "rgba(88, 88, 88,1)",
											label: "Bills"
										},
										{
											value : <?php echo $cat4;?>,
											color : "rgba(79, 82, 186, 1)",
											label: "EMI"
										},
										{
											value : <?php echo $cat5;?>,
											color : "rgba(233, 78, 2, 1)",
											label: "Entertaiment"
										},
										{
											value : <?php echo $cat6;?>,
											color : "rgba(242, 179, 63, 1)",
											label: "Shopping"
										},
										{
											value : <?php echo $cat7;?>,
											color : "rgba(88, 88, 88,1)",
											label: "Travel"
										},
										{
											value : <?php echo $cat8;?>,
											color : "rgba(79, 82, 186, 1)",
											label: "Other"
										}
										
									];
								
							new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
							new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
							
							</script>
							
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>