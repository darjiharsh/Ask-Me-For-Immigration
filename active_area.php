<?php
$id=$_GET['id'];
require '../creartdemo1/database.php';
$qry = "UPDATE area_tbl SET is_active=1 WHERE id=$id";

 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:area_unactive.php');
 }
 else
 {
 	echo "$qry"."<br>";
 }
?>