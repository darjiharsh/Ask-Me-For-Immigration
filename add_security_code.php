<?php

if(isset($_POST["btn_addsecurity"]))
{
	$security=$_POST["txt_security"];
	$dt=date('Y-m-d H:i:s');
	

	require "../creartdemo1/database.php";

	$qry = "SELECT * FROM security_tbl WHERE que_name LIKE '". $security ."'";
  	$rs = mysqli_query($conn,$qry);
  	if(mysqli_num_rows($rs) > 0)
    {
		header('location:add_security.php?msg=Area Already Exixts');
 	}
 	else
 	{
 		$qry1="INSERT into security_tbl(que_name,doi,is_active) VALUES ('". $security ."','". $dt ."','1')";

		// echo $qry;

		$rs1 = mysqli_query($conn,$qry1);
		if($rs1)
		{
			header('location:add_security.php');
			// echo "inserted";
		}	
 	}

	
}
?>