<?php
$id=$_GET['id'];
require '../creartdemo1/database.php';
$qry = "UPDATE area_tbl SET is_active='0' WHERE id=$id";
// echo "$qry"."<br>";
 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:manage_area.php');
 }
 else
 {
 	echo "update error";
 }
?>