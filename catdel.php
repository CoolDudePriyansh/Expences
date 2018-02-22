<?php 
	$cat_id=$_REQUEST["id"];
	require 'database.php';
	$obj=new database();
	$res=$obj->catDel($cat_id);
	if($res==1)
	{
		header('Location:viewcat.php');
		
	}
	else
		echo"Not deleted Some Error";

?>