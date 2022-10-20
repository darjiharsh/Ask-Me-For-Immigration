<?php
if(isset($_POST["btn_addpostcate"]))
{
	$cate=$_POST["txt_addpostcate"];
	$dt=date('Y-m-d H:i:s');
	// $type="post";
	
	require "../../creartdemo1/database.php";

	$qry = "SELECT * FROM cate_tbl WHERE cat_name LIKE '". $cate ."'";
  	$rs = mysqli_query($conn,$qry);
  	if(mysqli_num_rows($rs) > 0)
    {
		header('location:add_post_cat.php?msg=Area Already Exixts');
 	}
 	else
 	{
		$qry1="INSERT into cate_tbl(cat_name,doi,is_active) VALUES ('".$cate."','".$dt."','1')";

		// echo $qry;

		$rs1 = mysqli_query($conn,$qry1);
		if($rs1)
		{
			header('location:add_post_cat.php');
		}
		else
		{
			echo $qry;
		}
	}
}
?>
