<?php
	session_start();
	$mail=$_SESSION['mail'];
	$qid=$_GET['qid'];
	$to_id=$_GET['to_id'];
	$to_id1=$to_id;

	// echo $mail."<br>";
	// echo $qid."<br>";
	// echo $cmmt."<br>";
	// echo $to_id."<br>";

	if(isset($_POST['btn_cmmt']))
	{
		$cmmt=$_POST['txt_cmmt'];

		require "../../creartdemo1/database.php";
		$qry="INSERT into comment_tbl(comment,user_id,que_id,is_active)VALUES('".$cmmt."','".$mail."','$qid','1')";
		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			header("location:view_profile_2.php?to_id=".$to_id1."");
		}
		else
		{
			echo $qry;
		}

	}

?>