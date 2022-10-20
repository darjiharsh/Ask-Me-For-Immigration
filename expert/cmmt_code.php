<?php
	session_start();
	$mail=$_SESSION['mail'];
	$qid=$_GET['qid'];
	if(isset($_POST['btn_cmmt']))
	{
		$cmmt=$_POST['txt_cmmt'];

		require "../../creartdemo1/database.php";
		$qry="INSERT into comment_tbl(comment,user_id,que_id,is_active)VALUES('".$cmmt."','".$mail."','$qid','1')";
		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			header('location:index.php');
		}
		else
		{
			echo $qry;
		}

	}

?>