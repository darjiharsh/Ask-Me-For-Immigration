<?php
//var_dump($_POST);
$cityname = $_POST['txt_city'];
$id = $_POST['id'];
$dt=date('Y-m-d H:i:s');
require '../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
  $qry = "UPDATE city_tbl SET city_name='".$cityname."',dou='". $dt ."' WHERE id=$id";
  // echo "$qry"."<br>";
 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:manage_city.php');
 }
 else
 {
 	echo "update error";
 }
?>