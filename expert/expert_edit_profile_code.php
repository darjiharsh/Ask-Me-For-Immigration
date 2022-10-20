<?php
	if(isset($_POST['btn_edit']))
	{
		require "../../creartdemo1/database.php";
		
		$oldimg=$_GET["img"];
		$em=$_POST['txt_em'];
		$fn=$_POST['txt_fn'];
		$ln=$_POST['txt_ln'];
		$mo=$_POST['txt_mno'];
		$qua=$_POST['txt_qua'];
		$skill=$_POST['txt_skills'];
		$desc=$_POST['txt_desc'];
		$image=basename($_FILES["txt_img"]["name"]);
		$gender=$_POST['r1'];
		$dt=date('Y-m-d H:i:s');

		//echo $oldimg;

		if($image=="")
	    {
	        $image=$oldimg;
	    }
	    else  
	    {
	        unlink($oldimg);
	        move_uploaded_file($_FILES["txt_img"]["tmp_name"],"expert_image/".$image);
	        $image="expert_image/".$image;
	        echo $image;
	    }
		
		$qry="UPDATE user_tbl SET first_name='". $fn ."',last_name='". $ln ."',mobile_no='". $mo ."',gender='". $gender ."',qualification='". $qua ."',dou='". $dt ."',image='". $image ."' WHERE email_id='". $em ."'";

		$rs = mysqli_query($conn,$qry);
		if($rs)
		{
			$qry1="UPDATE expert_tbl SET expert_key_skills='". $skills ."',expert_desc='". $desc ."' WHERE user_id='". $em ."'";

			$rs1 = mysqli_query($conn,$qry1);
			if($rs1)
			{	
				 header('location:expert_view_profile.php');
			}
		}
		else
		{
			echo $qry;
		}
	}
?>