<?php
	if(isset($_POST['btn_edit']))
	{
		require "../creartdemo1/database.php";
		// var_dump($_POST);
		$oldimg=$_GET["img"];
		$em=$_POST['txt_em'];
		$fn=$_POST['txt_fn'];
		$ln=$_POST['txt_ln'];
		$mo=$_POST['txt_mno'];
		$qua=$_POST['txt_qua'];
		$image=basename($_FILES["txt_img"]["name"]);

		if($image=="")
	    {
	        $image=$oldimg;
	    }
	    else  
	    {
	        unlink($oldimg);
	        move_uploaded_file($_FILES["txt_img"]["tmp_name"],"admin_image/".$image);
	        $image="admin_image/".$image;
	    }
		
		$qry="UPDATE user_tbl SET first_name='". $fn ."',last_name='". $ln ."',mobile_no='". $mo ."',qualification='". $qua ."',image='". $image ."' WHERE email_id='". $em ."'";

		

		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			header('location:admin_view_profile.php');
		}
		else
		{
			echo $qry;
		}
	}
?>