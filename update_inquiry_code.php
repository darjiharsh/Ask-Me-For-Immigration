<?php
//var_dump($_POST);
$inquiry = $_POST['txt_inquiry'];
$id = $_POST['id'];
require '../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
  $qry = "UPDATE inquiry_tbl SET inquiry='".$inquiry."' WHERE id=$id";
  // echo "$qry"."<br>";
 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:view_inquiry.php');
 }
 else
 {
 	echo "update error";
 }
?>