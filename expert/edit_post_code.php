<?php
if(isset($_POST['btn_ok']))
{
  $cid=$_POST['category'];
  $id=$_POST['txt_id'];
  $title=$_POST['txt_post_title'];
  $keyword=$_POST['txt_post_keyword'];
  $desc=$_POST['txt_post_desc'];
  $img=$_POST['txt_post_img'];
  $mail=$_POST['txt_mail'];
  $dt=date('Y-m-d H:i:s');

  require '../../creartdemo1/database.php';

  $qry="UPDATE post_tbl SET post_cat_id=$cid,post_title='". $title ."',post_keyword='". $keyword ."',post_desc='". $desc ."',post_img='". $img ."',user_id='". $mail ."',dou='". $dt ."' WHERE pid='$id' ";


 $rs = mysqli_query($conn,$qry);
  if($rs)
  {
    header('location:view_post.php');
    // echo "inserted";
  }
}
?>
