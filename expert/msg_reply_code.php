<?php
	session_start();
	$mail=$_SESSION['mail'];

	if(isset($_POST['btn_send_reply']))
	{
		require "../../creartdemo1/database.php";
		$toid=$_POST['txt_to_id'];
		$sub=$_POST['txt_sub'];
		$msg=$_POST['txt_msg'];
		$isactive=1;
		$dt=date('Y-m-d H:i:s');

		$qry="INSERT INTO inbox_outbox(from_id,to_id,msg,sub,doi,is_active) VALUES ('". $mail ."','". $toid ."','". $msg ."','". $sub ."','". $dt ."','$isactive')";

		// echo $qry;

		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			echo "Successfull";
		}
		else
		{
			echo $qry;
		}
	}
?>