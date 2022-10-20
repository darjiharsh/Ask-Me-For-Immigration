<?php
$id=$_GET['id'];
require '../creartdemo1/database.php';
$qry = "UPDATE user_tbl SET is_active=1 WHERE email_id='".$id."' ";

 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:expert_unactive.php');
 }
 else
 {
 	echo "$qry"."<br>";
 }
?>