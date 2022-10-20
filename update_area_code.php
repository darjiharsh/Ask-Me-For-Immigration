<?php
//var_dump($_POST);
$areaname = $_POST['txt_area'];
$id = $_POST['id'];
require '../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
  $qry = "UPDATE area_tbl SET area_name='".$areaname."' WHERE id=$id";
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