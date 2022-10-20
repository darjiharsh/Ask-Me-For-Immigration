<?php
if(isset($_POST["btn_add_skill"]))
{
	$mail = $_POST['txt_em'];
	$skill=$_POST["txt_skill"];
	$desc=$_POST["txt_desc"];
	$dt=date('Y-m-d H:i:s');
	
	require "../../creartdemo1/database.php";

	// echo $category.'<br>';
	// echo $title.'<br>';
	// echo $keyword.'<br>';
	// echo $desc.'<br>';
	// echo $img.'<br>';
	// echo $email.'<br>';

	$qry="INSERT into expert_tbl(user_id,expert_key_skills,expert_desc,doi) VALUES ('". $mail ."','". $skill ."','". $desc ."','". $dt ."')";

	// echo $qry;

	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header('location:expert_gender.php');
		// echo "inserted";
	}
}
?>