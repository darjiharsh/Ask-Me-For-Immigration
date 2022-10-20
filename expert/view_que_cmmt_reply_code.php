<?php
	session_start();
	$mail=$_SESSION['mail'];
	$cmmt_id=$_GET['cmmt_id'];
	$user_id=$_GET['user_id'];
	$user_type=$_GET['user_type'];

	// echo $mail."<br>";
	// echo $qid."<br>";
	// echo $cmmt."<br>";
	// echo $to_id."<br>";

	if(isset($_POST['btn_cmmt']))
	{
		$reply=$_POST['txt_reply'];

		require "../../creartdemo1/database.php";
		$qry="INSERT into reply_tbl(reply,cmmt_id,user_id,is_active)VALUES('".$reply."','$cmmt_id','". $user_id ."','1')";
		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			header("location:view_reply.php?cmmt_id=".$cmmt_id." && user_id=".$user_id." && user_type=".$user_type." ");
		}
		else
		{
			echo $qry;
		}

	}

?>