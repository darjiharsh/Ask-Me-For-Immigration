<?php
  require '../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
  $qry = "SELECT * FROM user_tbl WHERE user_type=2 AND is_active=0";
  // echo "$qry"."<br>";
  $rs = mysqli_query($conn,$qry);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Unactive Expert - Ask Me</title>
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
              <a href="view_user.php">View user</a>
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
              <a href="add_expert.php">Add Expert</a>
            </li>
            <li>
              <a href="view_expert.php">View Expert</a>
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
      
    <div class="card mb-3">
        
    </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email Id</th>
                  <th>Mobile no</th>
                  <th>Qualification</th>
                  <th>User Type</th>
                  <th>Image</th>
                  <th>Active Status</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email Id</th>
                  <th>Mobile no</th>
                  <th>Qualification</th>
                  <th>User Type</th>
                  <th>Image</th>
                  <th>Active Status</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
              if(mysqli_num_rows($rs) > 0)
                {
                  while($row = mysqli_fetch_assoc($rs))
                  {
              ?>
                <tr>
                  <td><?php echo $row['first_name']; ?></td>
                  <td><?php echo $row['last_name']; ?></td>
                  <td><?php echo $row['email_id']; ?></td>
                  <td><?php echo $row['mobile_no']; ?></td>
                  <td><?php echo $row['qualification']; ?></td>
                  <td><?php echo $row['user_type']; ?></td>
                  <td><?php echo $row['image']; ?></td>
                  <td><a href="active_expert.php?id=<?php echo $row['email_id'];?> && isactive=<?php echo $row['is_active']; ?>">Change</a></td>
                </tr>
                <?php   
                  }
                }
                else
                {
                  // echo "0 Rows Returned!";
                }
                ?>
             </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM
        <a href="view_expert.php"><input type="submit" class="btn btn-primary btn-block" value="Active"></a>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
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
  </div>
  </div>
</body>

</html>
