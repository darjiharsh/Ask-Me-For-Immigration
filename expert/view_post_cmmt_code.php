<?php
	session_start();
	$mail=$_SESSION['mail'];
	$post_id=$_GET['post_id'];
	$user_id=$_GET['user_id'];
	$user_type=$_GET['user_type'];

	// echo $mail."<br>";
	// echo $qid."<br>";
	// echo $cmmt."<br>";
	// echo $to_id."<br>";

	if(isset($_POST['btn_cmmt']))
	{
		$cmmt=$_POST['txt_cmmt'];

		require "../../creartdemo1/database.php";
		$qry="INSERT into comment_tbl(comment,user_id,post_id,is_active)VALUES('".$cmmt."','".$mail."','$post_id','1')";
		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			header("location:view_post_cmmt.php?post_id=".$post_id." && user_id=".$user_id." && user_type=".$user_type." ");
		}
		else
		{
			echo $qry;
		}

	}

?>