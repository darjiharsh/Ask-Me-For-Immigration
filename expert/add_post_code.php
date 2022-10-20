<?php
if(isset($_POST["btn_addpost"]))
{
	$category = $_POST['category'];
	$title=$_POST["txt_post_title"];
	$keyword=$_POST["txt_post_keyword"];
	$desc=$_POST["txt_post_desc"];
	$img=$_POST["txt_post_img"];
	$email=$_POST["txt_post_email"];
	$dt=date('Y-m-d H:i:s');

	require "../../creartdemo1/database.php";

	// echo $category.'<br>';
	// echo $title.'<br>';
	// echo $keyword.'<br>';
	// echo $desc.'<br>';
	// echo $img.'<br>';
	// echo $email.'<br>';

	$qry="INSERT into post_tbl(post_cat_id,post_title,post_keyword,post_desc,post_img,user_id,doi,is_active) VALUES ('$category','". $title ."','". $keyword ."','". $desc ."',null,'". $email ."','". $dt ."','1')";

	echo $qry;

	$rs = mysqli_query($conn,$qry);
	if($rs)
	{
		header('location:add_post.php');
		// echo "inserted";
	}
}
?>