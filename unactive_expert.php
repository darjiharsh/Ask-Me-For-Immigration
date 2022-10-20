<?php
// $id=$_GET['id'];
// require '../creartdemo1/database.php';
// $qry = "UPDATE user_tbl SET is_active='0' WHERE email_id='".$id."'";
// echo "$qry"."<br>";
 // $rs = mysqli_query($conn,$qry);
 // if($rs)
 // {
 // 	header('location:view_expert.php');
 // }
 // else
 // {
 // 	echo "update error";
 // }
?>
<?php
require '../creartdemo1/database.php';

if(isset($_GET['id']))
{
$id = $_GET['id'];
$isactive = $_GET['isactive'];
// echo $id;
// echo $isactive;
if($isactive==1)
{
	$isactive=0;
	// echo"hello";
}
else
{
	$isactive=1;
	// echo "bye";
}

$qry = "UPDATE user_tbl SET is_active=$isactive WHERE email_id='".$id."'";
// echo $qry;
$rs = mysqli_query($conn,$qry);
if($rs)
{
	//echo "Updated Successfully";
	header("location:view_expert.php");
}
}
?>