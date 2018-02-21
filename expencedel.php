<?php 
	$exp_id=$_REQUEST["id"];
	require 'database.php';
	$obj=new database();
	$res=$obj->expDel($exp_id);
	if($res==1)
	{
		header('Location:totalExpences.php');
		
	}
	else
		echo"Not deleted Some Error";

?>