<?php
if(isset($_POST["btn_addblogcate"]))
{
	$cate=$_POST["txt_addblogcate"];
	$type="blog";
	
	require "../creartdemo1/database.php";

	$qry="INSERT into cate_tbl(cat_name,cat_type,is_active) VALUES ('".$cate."','". $type ."','1')";

	// echo $qry;

	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header('location:add_blogcate.php');
	}
	else
	{
		echo $qry;
	}
}
?>
