<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Change Password - Ask Me</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Ask Me</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <?php
        require 'link1.php';

        require '../creartdemo1/database.php';

        $id=$_GET['id'];
        $cid=$_GET['cid'];

        $qry = "SELECT * FROM post_tbl WHERE pid=$id";
        $rs = mysqli_query($conn,$qry);

        $qry1 = "SELECT cate_tbl.cid,cate_tbl.is_active,post_tbl.post_cat_id,cate_tbl.cat_name FROM cate_tbl INNER JOIN post_tbl ON cate_tbl.cid = post_tbl.post_cat_id WHERE post_tbl.post_cat_id=$cid";

        $rs1 = mysqli_query($conn,$qry1);
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
              <div class="card-body">
                <div class="form-group">
                  <div class="form-row">
                  
                  <?php 
                  if(mysqli_num_rows($rs1) > 0)
                  {
                    $row1 = mysqli_fetch_assoc($rs1)
                  ?>
                  
                  <form>
                  <label>Category Name:</label><br>  
                  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row1['cat_name'];?>" readonly>
                  </div><br>

                  <?php
                  }
                  ?>

                  <?php
                    if(mysqli_num_rows($rs) > 0)
                    {
                      while($row = mysqli_fetch_assoc($rs))
                      {
                  ?>

                  <div class="form-row">
                  <label>User ID:</label><br>  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row['user_id'];?>" readonly>
                  </div><br>

                  <div class="form-row">
                  <label>Post Title:</label><br>  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row['post_title'];?>" readonly>
                  </div><br>

                  <div class="form-row">
                  <label>Post Keyword:</label><br>  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row['post_keyword'];?>" readonly>
                  </div><br>

                  <div class="form-row">
                  <label>Post Description:</label><br>  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row['post_desc'];?>" readonly>
                  </div><br>

                  <div class="form-row">
                  <label>Post Image:</label><br>  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row['post_img'];?>" readonly>
                  </div><br>

                  <div class="form-row">
                  <label>User Type:</label><br>  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row['user_type'];?>" readonly>
                  </div><br>

                  <div class="form-row">
                  <label>Date Of Inseration:</label><br>  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row['doi'];?>" readonly>
                  </div><br>

                  <div class="form-row">
                  <label>Date Of Updation:</label><br>  
                  <input class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $row['dou'];?>" readonly>
                  </div><br>

                  <a href="view_post.php"><input type="Button" class="btn btn-primary btn-block" value="Ok"></a>

                  <?php
                      }
                    }
                  ?>


                  </form>
                  </div>
                </div>
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
          <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>