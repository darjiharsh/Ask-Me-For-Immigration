<?php
if(isset($_POST["btn_addstate"]))
{
	$cid = $_POST['country'];
	$state=$_POST["txt_state"];
	$dt=date('Y-m-d H:i:s');

	require "../creartdemo1/database.php";

	$qry = "SELECT * FROM state_tbl WHERE state_name LIKE '". $state ."'";
  	$rs = mysqli_query($conn,$qry);
  	if(mysqli_num_rows($rs) > 0)
    {
		header('location:add_state.php?msg=Area Already Exixts');
 	}
 	else
 	{
		$qry1="INSERT into state_tbl(country_id,state_name,doi,is_active) VALUES ('$cid','". $state ."','". $dt ."','1')";

		// echo $qry;

		$rs1 = mysqli_query($conn,$qry1);
		if($rs1)
		{
			header('location:add_state.php');
			// echo "inserted";
		}
	}
}
?>