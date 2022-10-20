<?php
if(isset($_POST["btn_addquecate"]))
{
	$cate=$_POST["txt_addquecate"];
	$type="question";
	
	require "../creartdemo1/database.php";

	$qry="INSERT into cate_tbl(cat_name,cat_type,is_active) VALUES ('".$cate."','". $type ."','1')";

	// echo $qry;

	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header('location:add_quecate.php');
	}
	else
	{
		echo $qry;
	}
}
?>
