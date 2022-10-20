<?php
	$from=$_GET['from'];
	$to=$_GET['to'];
	$is_active=1;
	$dt=date('Y-m-d H:i:s');

	require "../../creartdemo1/database.php";

	$qry1="INSERT into req_tbl(from_id,to_id,doi,is_active) VALUES ('". $from."','". $to."','". $dt ."','1')";
	$rs1 = mysqli_query($conn,$qry1);
	if($rs1)
	{
		header('location:index.php');
	}
  	else
  	{
  		echo $qry1;
  	}

?>