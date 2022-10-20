<?php
require '../../creartdemo1/database.php';
$id = $_GET['id'];
$cid=$_GET['cid'];

$qry = "SELECT * FROM post_tbl WHERE pid='$id'";
$rs = mysqli_query($conn,$qry);

 $qry1 = "SELECT * FROM cate_tbl";
  $rs1 = mysqli_query($conn,$qry1);

if(mysqli_num_rows($rs) > 0)
{
	while($row = mysqli_fetch_assoc($rs))
    {
    	$id=$row['pid'];
    	$cat_id=$row['post_cat_id'];
    	$title=$row['post_title'];
    	$keyword=$row['post_keyword'];
    	$desc=$row['post_desc'];
    	$img=$row['post_img'];
    	$mail=$row['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Post - Ask Me</title>
</head>

  <?php
    require 'link.html';
  ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Ask Me</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <?php
        require 'link.php';
       ?>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
          <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
          <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit Post</div>
      <div class="card-body">
        <form method="post" action="edit_post_code.php">
        <label>Change Category</label><br>
              <SELECT name="category" >
              <?php
              if(mysqli_num_rows($rs1)>0)
              {
                while($row1 = mysqli_fetch_assoc($rs1))
                 {
              ?>
              <option value="<?php echo $row1['cid']; ?>" <?php if($cid==$row1['cid']){echo "selected";} ?>>
              <?php echo $row1['cat_name'];?> </option>

              <?php
                }
              }
              else
              {
                // echo "No Country Found !";
              }
              ?>
              </SELECT><br><br>
          
          <div class="form-group">
            
              <div class="form-row">

              <input class="form-control" id="exampleInputPassword1" type="text" hidden name="txt_id" value="<?php echo $id; ?>">
              <br>
              
              <label for="exampleInputPassword2">Post Category</label>
              <input class="form-control" id="exampleInputPassword2" type="text" name="txt_post_cate" value="<?php echo $cat_id; ?>">
              <br>
              
              <label for="exampleInputPassword3">Post title</label>
              <input class="form-control" id="exampleInputPassword3" type="text" name="txt_post_title" value="<?php echo $title; ?>">

              <label for="exampleInputPassword4">Post Keyword</label>
              <input class="form-control" id="exampleInputPassword4" type="text" name="txt_post_keyword" value="<?php echo $keyword; ?>">

              <label for="exampleInputPassword5">Post Descripation</label>
              <textarea row="50" class="form-control" id="exampleInputPassword5" name="txt_post_desc" value=""><?php echo $desc; ?></textarea>

              <label for="exampleInputPassword6">Post Image</label>
              <input class="form-control" id="exampleInputPassword6" type="file" name="txt_post_img" value="<?php echo $img; ?>">

              <label for="exampleInputPassword7">User Id</label>
              <input class="form-control" id="exampleInputPassword7" type="text" name="txt_mail" readonly value="<?php echo $mail; ?>"><br>
            </div><br>

           	<input type="submit" class="btn btn-primary" name="btn_ok" value="OK">
          </div>	
        </form>
        <a href="view_post.php"><input type="submit" class="btn btn-primary" name="btn_back" value="Back"></a>
        <?php
        	}
        }
        ?>
        </div>
        </div>
      </div>
    </div>
          </div>
          </div>
      
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../login1.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>