<?php
	if(isset($_POST['btn_addexpert']))
	{
		require "../../creartdemo1/database.php";
		// var_dump($_POST);
		$fn=$_POST['txt_fn'];
		$ln=$_POST['txt_ln'];
		$em=$_POST['txt_em'];
		$pass=$_POST['txt_pass'];
		$mo=$_POST['txt_mno'];
		$qua=$_POST['txt_qua'];
		$type=2;
		$isactive=1;
		$dt=date('Y-m-d H:i:s');
		
		$target_dir="expert_image/";
		$target_file=$target_dir . basename($_FILES["txt_img"]["name"]);

		if(move_uploaded_file($_FILES["txt_img"]["tmp_name"], $target_file))
   		{
        	$img=$target_file;
   		}

		$qry="INSERT into user_tbl(first_name,last_name,email_id,password,mobile_no,qualification,user_type,image,doi,is_active) VALUES ('". $fn ."','". $ln ."','". $em ."','". $pass ."','".$mo."','".$qua."','$type','".$img."','".$dt."','$isactive')";

		// echo $qry;

		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			header('location:../add_expert.php');
		}
		else
		{
			echo $qry;
		}
	}
?>