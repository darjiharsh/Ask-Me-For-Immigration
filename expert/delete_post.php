<?php
require '../../creartdemo1/database.php';

if(isset($_GET['id']))
{
$id = $_GET['id'];
$isactive = $_GET['isactive'];
// echo $id;
// echo $isactive;
if($isactive==1 || $isactive==0)
{
	$isactive=2 ;
	// echo"hello";
}
// else
// {
// 	$isactive=1;
// 	// echo "bye";
// }

$qry = "UPDATE post_tbl SET is_active=$isactive WHERE pid='".$id."'";
// echo $qry;
$rs = mysqli_query($conn,$qry);
if($rs)
{
	//echo "Updated Successfully";
	header("location:view_post.php");
}
}
?>