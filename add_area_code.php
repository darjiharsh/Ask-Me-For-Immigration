<?php
if(isset($_POST["btn_addarea"]))
{
	$area=$_POST["txt_area"];

	require "../creartdemo1/database.php";

	$qry="INSERT into area_tbl(area_name,is_active) VALUES ('". $area ."','1')";

	// echo $qry;

	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		echo "hello";
	}
}
?>