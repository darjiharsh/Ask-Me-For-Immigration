<?php
session_start();
$mail=$_SESSION["mail"];

if(isset($_POST['btn_gender']))
{
	$id=$_POST['id'];
	$add=$_POST['txt_add'];
	$gen=$_POST['r1'];
	$dt=date('Y-m-d H:i:s');

	require "../../creartdemo1/database.php";

    $qry="UPDATE user_tbl SET gender='".$gen."',address='". $add ."',dou='". $dt ."' WHERE email_id='".$mail."' ";

	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header('location:expert_country.php');
		// echo "inserted";
	}
}
?>