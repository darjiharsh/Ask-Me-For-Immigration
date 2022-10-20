<?php

	session_start();
	$mail=$_SESSION['mail'];
	$uid=$_GET['uid'];
	$rid=$_GET['rid'];
	require '../../creartdemo1/database.php';
	if(isset($_POST['btn_accept']))
	{
		$qry="INSERT into follow_unfollow_tbl(user_id,following,is_active) VALUES ('". $uid ."','". $mail ."','1')";
		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			$qry1 = "UPDATE req_tbl SET is_active='0' WHERE from_id='". $uid ."' ";
			$rs1 = mysqli_query($conn,$qry1);
			header('location:view_req.php');
		}
	}

	if(isset($_POST['btn_reject']))
	{
		$qry2 = "UPDATE req_tbl SET is_active='2' WHERE id='". $rid ."' ";
		$rs2 = mysqli_query($conn,$qry2);
		header('location:view_req.php');
	}


?>