<?php
if(isset($_POST["btn_addcity"]))
{
	$city=$_POST["txt_city"];
	$sid = $_POST['city'];
	$cid = $_POST['country'];
	$dt=date('Y-m-d H:i:s');

	require "../creartdemo1/database.php";

	$qry = "SELECT * FROM city_tbl WHERE city_name LIKE '". $city ."'";
  	$rs = mysqli_query($conn,$qry);
  	if(mysqli_num_rows($rs) > 0)
    {
		header('location:add_city.php?msg=Area Already Exixts');
 	}
	else
	{
		$qry1="INSERT into city_tbl(city_name,country_id,state_id,doi,is_active) VALUES ('". $city ."',$cid,$sid,'". $dt ."','1')";

		// echo $qry;

		$rs1 = mysqli_query($conn,$qry1);
		if($rs1)
		{
			header('location:add_city.php');
		}
	}
}
?>
