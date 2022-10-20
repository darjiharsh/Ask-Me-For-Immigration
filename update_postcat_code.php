<?php
//var_dump($_POST);
$cat = $_POST['txt_cat'];
$id = $_POST['id'];
$dt=date('Y-m-d H:i:s');
require '../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
	$qry="UPDATE cate_tbl SET cat_name='".$cat."',dou='". $dt ."' WHERE cid=$id";
  // echo "$qry"."<br>";
 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:view_postcate.php');
 }
 else
 {
 	echo $qry;
 }
?>