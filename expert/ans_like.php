<?php
	
	$uid=$_GET['uid'];
	$qid=$_GET['qid'];

	require "../../creartdemo1/database.php";

	$qry="INSERT into que_like(q_id,user_id,is_active) VALUES ('". $qid ."','". $uid ."','1')";
	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header('location:index.php');
	}

?>