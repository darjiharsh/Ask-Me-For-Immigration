<!DOCTYPE html>
<html lang="en">

<head>
  <title>Change Password - Ask Me</title>
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
      <div class="card-header">Change Password</div>
      <div class="card-body">
        <form method="post" action="change_password_code.php">
          
          <div class="form-group">
            
              <div class="form-row">

              <label for="exampleInputPassword1">Enter Your Current Password</label>
              <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Enter Your Current Password" name="txt_current_pass" pattern=".{3,12}" title="Your Password Must be 6 to 12 Characters" required>
              </div><br>
              
              <div class="form-row">
              <label for="exampleInputPassword2">Enter Your New Password</label>
              <input class="form-control" id="exampleInputPassword2" type="password" placeholder="Enter Your New Password" name="txt_new_pass" pattern=".{3,12}" title="Your Password Must be 6 to 12 Characters" required>
              </div><br>
              
              <div class="form-row">
              <label for="exampleInputPassword3">Enter Confirm Password</label>
              <input class="form-control" id="exampleInputPassword3" type="password" placeholder="Enter Confirm Password" name="txt_confirm_pass" pattern=".{3,12}" title="Your Password Must be 6 to 12 Characters" required>
              </div><br>
              
          <input type="submit" class="btn btn-primary btn-block" name="btn_changepass" value="Change Password">
        </form>
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