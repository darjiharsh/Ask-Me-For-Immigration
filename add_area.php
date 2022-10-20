<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Area - Ask Me</title>
  <?php
  require 'link.html';
  ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Ask Me</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <!-- <i class="fa fa-fw fa-dashboard"></i> -->
            <span class="nav-link-text">Home</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti1" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">Profile Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti1">
            <li>
              <a href="#">View Profile</a>
            </li>
            <li>
              <a href="#">Edit Profile</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">User Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti3">
            <li>
              <a href="#">Add User</a>
            </li>
            <li>
              <a href="#">View user</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti5" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">Expert Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti5">
            <li>
              <a href="#">Add Expert</a>
            </li>
            <li>
              <a href="#">View Expert</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="#">
            <!-- <i class="fa fa-fw fa-dashboard"></i> -->
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-wrench"></i> -->
            <span class="nav-link-text">Post Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents4">
            <li>
              <a href="#">View Post</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti6" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">Question Category</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti6">
            <li>
              <a href="add_quecate.php">Add Category</a>
            </li>
            <li>
              <a href="view_quecate.php">View Category</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti7" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">Post Category</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti7">
            <li>
              <a href="add_postcate.php">Add Category</a>
            </li>
            <li>
              <a href="view_postcate.php">View Category</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti8" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">Blog Category</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti8">
            <li>
              <a href="add_blogcate.php">Add Category</a>
            </li>
            <li>
              <a href="view_blogcate.php">View Category</a>
            </li>
            <li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti9" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">Notification Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti9">
            <li>
              <a href="#">View Notification</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-wrench"></i> -->
            <span class="nav-link-text">State Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="Add_state.php">Add State</a>
            </li>
            <li>
              <a href="manage_state.php">Manage State</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-file"></i> -->
            <span class="nav-link-text">City Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="add_city.php">Add City</a>
            </li>
            <li>
              <a href="manage_city.php">Manage City</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">Area Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="add_area.php">Add Area</a>
            </li>
            <li>
              <a href="manage_area.php">Manage Area</a>
            </li>
            
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti10" data-parent="#exampleAccordion">
            <!-- <i class="fa fa-fw fa-sitemap"></i> -->
            <span class="nav-link-text">Inquire Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti10">
            <li>
              <a href="#">View Inquire</a>
            </li>
          </ul>
        </li>
      </ul>
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
        <form method="post" action="add_area_code.php">
          <label for="exampleInputName">Add Area</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter the area" name="txt_area"><br>
                
                <input type="submit" class="btn btn-primary btn-block" name="btn_addarea" value="Add">
        </form>
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
            <a class="btn btn-primary" href="login1.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>