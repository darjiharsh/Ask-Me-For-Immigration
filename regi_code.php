<?php
	if(isset($_POST['btn_regi']))
	{
		require "../creartdemo1/database.php";
		// var_dump($_POST);
		$fn=$_POST['txt_fn'];
		$ln=$_POST['txt_ln'];
		$em=$_POST['txt_em'];
		$pass=$_POST['txt_pass'];
		$mo=$_POST['txt_mno'];
		$qua=$_POST['txt_qua'];
		$type=$_POST['user_type'];
		$img=$_POST['txt_img'];
		$isactive=1;

		$qry="INSERT into user_tbl(first_name,last_name,email_id,password,mobile_no,qualification,user_type,image,is_active) VALUES ('". $fn ."','". $ln ."','". $em ."','". $pass ."','".$mo."','".$qua."','".$type."','".$img."',$isactive)";

		// echo $qry;

		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			header('location:login1.php');
		}
		else
		{
			echo $qry;
		}
	}
?>