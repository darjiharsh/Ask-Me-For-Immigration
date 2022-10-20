<?php
	
	$uid=$_GET['uid'];
	$qid=$_GET['qid'];
	$to_id=$_GET['to_id'];

	require "../../creartdemo1/database.php";

	$qry="INSERT into que_like(q_id,user_id,is_active) VALUES ('". $qid ."','". $uid ."','1')";
	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:view_profile_2.php?to_id=". $to_id ."");
	}

?>