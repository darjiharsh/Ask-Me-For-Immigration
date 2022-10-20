<?php
require '../creartdemo1/database.php';

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$isactive = $_GET['isactive'];

	if($isactive==1 || $isactive==0)
	{
		$isactive=2;
	}

	$qry = "UPDATE inquiry_tbl SET is_active=$isactive WHERE id=$id";

	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:view_inquiry.php");
	}
}
?>