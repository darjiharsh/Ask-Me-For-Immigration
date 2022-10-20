<?php
if(isset($_POST["btn_addcountry"]))
{
	$country=$_POST["txt_country"];
	$dt=date('Y-m-d H:i:s');
	// echo $country;
	require "../creartdemo1/database.php";


	$qry = "SELECT * FROM country_tbl WHERE name LIKE '". $country ."'";
  	$rs = mysqli_query($conn,$qry);
  	if(mysqli_num_rows($rs) > 0)
    {
		header('location:add_country.php?msg=Country Already Exixts');
 	}
   	else
        	{
        		$qry1="INSERT into country_tbl(name,doi,is_active) VALUES ('". $country ."','". $dt ."','1')";

				$rs1 = mysqli_query($conn,$qry1);
				if($rs1)
				{
					header('location:add_country.php');
				}
        	}
}
?>