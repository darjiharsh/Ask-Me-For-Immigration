<?php
$id=$_GET['id'];
require '../creartdemo1/database.php';
$qry = "UPDATE cate_tbl SET is_active=1 WHERE cid=$id";

 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:que_unactive.php');
 }
 else
 {
 	echo "$qry"."<br>";
 }
?>