<?php
session_start();
$mail=$_SESSION["mail"];
if(isset($_POST['btn_security']))
{
	$id=$_POST['id'];
	$que=$_POST['txt_sec_que'];
	$ans=$_POST['txt_ans'];

	require "../../creartdemo1/database.php";

    $qry="UPDATE user_tbl SET security_id=$id,security_ans='". $ans ."' WHERE email_id='".$mail."' ";

	//$qry="INSERT into user_tbl(security_id,security_ans) VALUES ($id,'". $ans ."') WHERE email_id='". $mail ."' ";

	// echo $id;
	// echo $ans;
	// echo $mail;

	//echo $qry;

	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header('location:expert_skills.php');
		// echo "inserted";
	}
}
?>