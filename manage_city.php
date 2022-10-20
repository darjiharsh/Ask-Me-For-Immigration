<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Manage City - Ask Me</title>
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
  <?php
  require '../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
  $qry = "SELECT * FROM city_tbl WHERE is_active!=2";
  // echo "$qry"."<br>";
  $rs = mysqli_query($conn,$qry);
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      
   <!--  <div class="card mb-3">
        
    </div> -->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> City Table</div>
        <div class="card-body" style="overflow: scroll;">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Country Name</th>
                  <th>State Name</th>
                  <th>City Name</th>
                  <th>Date Of Insertion</th>
                  <th>Date Of Updation</th>
                  <th>Edit</th>
                  <th>Active/Block</th>
                  <th>Action</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Country Name</th>
                  <th>State Name</th>
                  <th>City Name</th>
                  <th>Date Of Insertion</th>
                  <th>Date Of Updation</th>
                  <th>Edit</th>
                  <th>Active/Block</th>
                  <th>Action</th>
                  <th>Delete</th>
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
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['country_id']; ?></td>
                  <td><?php echo $row['state_id']; ?></td>
                  <td><?php echo $row['city_name']; ?></td>
                  <td><?php echo $row['doi']; ?></td>
                  <td><?php echo $row['dou']; ?></td>

                  <td><a href="edit_city.php?id=<?php echo $row['id']; ?>">Edit</a></td>

                  <td><?php if($row['is_active']==1){echo "Active";}else{echo "Blocked";} ?></td>

                  <td><a href="is_active_city.php?id=<?php echo $row['id'];?> && isactive=<?php echo $row['is_active']; ?>">Change</a></td>

                  <td><a href="delete_city.php?id=<?php echo $row['id'];?> && isactive=<?php echo $row['is_active']; ?>">Delete</a></td>
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
            <!-- <?php
              if(mysqli_num_rows($rs) > 0)
                {
                  while($row = mysqli_fetch_assoc($rs))
                  {
                    $country_id=$row['country_id'];
                    $state_id=$row['state_id'];

              ?>
              <?php

                 $qry1 = "SELECT * FROM country_tbl WHERE id=$country_id";
                 $rs1 = mysqli_query($conn,$qry1);
                 if(mysqli_num_rows($rs1) > 0)
                 {
                    while($row1 = mysqli_fetch_assoc($rs1))
                      {
                        $country_name=$row1['name'];
                      }
                 }

                 $qry2 = "SELECT * FROM state_tbl WHERE id=$state_id";
                 $rs2 = mysqli_query($conn,$qry2);
                 if(mysqli_num_rows($rs2) > 0)
                 {
                    while($row2 = mysqli_fetch_assoc($rs2))
                      {
                        $state_name=$row2['state_name'];
                      }
                 }

              ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php if($country_name==null) { echo "null"; } else { echo $country_name; } ?></td>
                  <td><?php echo $state_name; ?></td>
                  <td><?php echo $row['city_name']; ?></td>
                  <td><?php echo $row['doi']; ?></td>
                  <td><?php echo $row['dou']; ?></td>

                  <td><a href="edit_city.php?id=<?php echo $row['id']; ?>">Edit</a></td>

                  <td><?php if($row['is_active']==1){echo "Active";}else{echo "Blocked";} ?></td>

                  <td><a href="is_active_city.php?id=<?php echo $row['id'];?> && isactive=<?php echo $row['is_active']; ?>">Change</a></td>

                  <td><a href="delete_city.php?id=<?php echo $row['id'];?> && isactive=<?php echo $row['is_active']; ?>">Delete</a></td>
                </tr>
                <?php   
                  }
                }
                else
                {
                  // echo "0 Rows Returned!";
                }
                ?> -->
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM
        <!-- <a href="city_unactive.php"><input type="submit" class="btn btn-primary btn-block" value="Unactive"></a> -->
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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>

</html>
