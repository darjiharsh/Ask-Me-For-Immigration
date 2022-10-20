<?php
//var_dump($_POST);
$statename = $_POST['txt_state'];
$id = $_POST['id'];
$cid = $_POST['country']; 
$dt=date('Y-m-d H:i:s');
require '../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
  $qry = "UPDATE state_tbl SET country_id=$cid,state_name='".$statename."',dou='". $dt ."' WHERE id=$id";
  // echo "$qry"."<br>";
 $rs = mysqli_query($conn,$qry);
 if($rs)
 {
 	header('location:manage_state.php');
 }
 else
 {
 	echo "update error";
 }
?>