<?php
//var_dump($_POST);
$security = $_POST['txt_security'];
$id = $_POST['id'];
$dt=date('Y-m-d H:i:s');
require '../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
  $qry = "UPDATE security_tbl SET que_name='".$security."',dou='".$dt."' WHERE id=$id";
  // echo "$qry"."<br>";
 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:view_security.php');
 }
 else
 {
 	echo "update error";
 }
?>