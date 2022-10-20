<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>View Likes - Ask Me</title>
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
  $qry = "SELECT * FROM que_like WHERE is_active=1";
  // echo "$qry"."<br>";
  $rs = mysqli_query($conn,$qry);
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
      
    <!-- <div class="card mb-3">
        
    </div> -->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Like Table</div>
        <div class="card-body" style="overflow: scroll;">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Question</th>
                  <th>User ID</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Question</th>
                  <th>User ID</th>
               </tr>
              </tfoot>
              <tbody>
              <?php
              if(mysqli_num_rows($rs) > 0)
                {
                  while($row = mysqli_fetch_assoc($rs))
                  {
                    $que_id=$row['q_id'];
                    $user_id=$row['user_id'];
              ?>
              <?php
                $qry1 = "SELECT * FROM que_tbl WHERE id=$que_id";
                $rs1 = mysqli_query($conn,$qry1);            
                if(mysqli_num_rows($rs1) > 0)
                {
                  while($row1 = mysqli_fetch_assoc($rs1))
                  {
                    $que=$row1['que_title'];
                  }
                }

                $qry2 = "SELECT * FROM user_tbl WHERE email_id='". $user_id ."'";
                $rs2 = mysqli_query($conn,$qry2);            
                if(mysqli_num_rows($rs2) > 0)
                {
                  while($row2 = mysqli_fetch_assoc($rs2))
                  {
                    $fn=$row2['first_name'];
                    $ln=$row2['last_name'];
                  }
                }
              ?>
                <tr>
                  <td><?php echo $que; ?></td>
                  <td><?php echo $fn.'&nbsp'.$ln; ?></td>
                  <!-- <td><?php echo $row['que_desc']; ?></td>
                  <td><?php echo $row['doi']; ?></td>
                  <td><?php echo $row['dou']; ?></td> -->

                  <!-- <td><a href="edit_que.php?id=<?php echo $row['id']; ?>">Edit</a></td> -->

                  <!-- <td><?php if($row['is_active']==1){echo "Active";}else{echo "Blocked";} ?></td>

                  <td><a href="is_active_que.php?id=<?php echo $row['id'];?> && isactive=<?php echo $row['is_active']; ?>">Change</a></td>

                  <td><a href="delete_que.php?id=<?php echo $row['id'];?> && isactive=<?php echo $row['is_active']; ?>">Delete</a></td> -->
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
        <!-- <a href="inquiry_unactive.php"><input type="submit" class="btn btn-primary btn-block" value="Unactive"></a> -->
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
