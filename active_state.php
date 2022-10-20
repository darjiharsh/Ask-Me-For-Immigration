<?php
$id=$_GET['id'];
require '../creartdemo1/database.php';
$qry = "UPDATE state_tbl SET is_active=1 WHERE id=$id";

 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:state_unactive.php');
 }
 else
 {
 	echo "$qry"."<br>";
 }
?>