<?php
session_start();
$mail=$_SESSION["mail"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Profile - Ask Me</title>
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
        require 'link1.php';
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
          
          <?php
            require '../creartdemo1/database.php';
            $qry = "SELECT * FROM user_tbl WHERE email_id='". $mail ."'";
            $rs = mysqli_query($conn,$qry);
            if(mysqli_num_rows($rs) > 0)
            {
              while($row = mysqli_fetch_assoc($rs))
              {
          ?>
                <form method="post" action="admin_edit_profile_code.php?img=<?php echo $row['image']; ?>" enctype="multipart/form-data">
                <div class="col-md-6">
                  <img src="<?php echo $row['image']; ?>" style="height:250px;width: 300px;"><br><br>
                  <input type="file" name="txt_img">
                </div><br>

                <div class="col-md-6">
                <label for="exampleInputName3"><b>Email Id</b></label>
                <input class="form-control" id="exampleInputName3" type="text" aria-describedby="nameHelp" name="txt_em" readonly value="<?php echo $row['email_id']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName"><b>First name</b></label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="txt_fn" value="<?php echo $row['first_name']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName2"><b>Last name</b></label>
                <input class="form-control" id="exampleInputName2" type="text" aria-describedby="nameHelp" name="txt_ln" value="<?php echo $row['last_name']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName4"><b>Mobile No</b></label>
                <input class="form-control" id="exampleInputName4" type="text" aria-describedby="nameHelp" name="txt_mno" value="<?php echo $row['mobile_no']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName5"><b>Qualification</b></label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" name="txt_qua" value="<?php echo $row['qualification']; ?>"></div><br>

                <div class="col-md-6">
                <input type="submit" class="btn btn-primary btn-block" name="btn_edit" value="Edit">
                </div>
                </form>
                
          <?php
              }
            }
          ?>

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
  </div>
</body>

</html>