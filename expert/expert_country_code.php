<?php
session_start();
$mail=$_SESSION["mail"];

	if(isset($_POST['btn_country']))
	{
		$country=$_POST['country'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$dt=date('Y-m-d H:i:s');

		require "../../creartdemo1/database.php";

	    $qry="UPDATE user_tbl SET country_id=$country,state_id=$state,city_id=$city,dou='". $dt ."' WHERE email_id='".$mail."' ";


		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			// echo $qry;
			header('location:expert_edit_profile.php');
			// echo "inserted";
		}

	}
?>