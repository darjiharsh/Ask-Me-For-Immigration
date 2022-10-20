<?php
  require '../../creartdemo1/database.php';
  //Show All type of users
  // echo "<br>"."Show All Users!"."<br>";
  $qry = "SELECT * FROM post_tbl WHERE is_active!=2";
  // echo "$qry"."<br>";
  $rs = mysqli_query($conn,$qry);

  $qry1 = "SELECT cate_tbl.cid,cate_tbl.is_active,post_tbl.post_cat_id,cate_tbl.cat_name FROM cate_tbl INNER JOIN post_tbl ON cate_tbl.cid = post_tbl.post_cat_id WHERE post_tbl.is_active!=2";

  $rs1 = mysqli_query($conn,$qry1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>View Post - Ask Me</title>
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
      
    <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> View Post Table</div>
        <div class="card-body" style="overflow: scroll;">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Post Id</th>
                  <th>Post Category Id</th>
                  <th>Post Title</th>
                  <!-- <th>Post Keyword</th> -->
                  <th>Post Descripation</th>
                  <!-- <th>Post Image</th> -->
                  <th>User Id</th>
                  <!-- <th>User Type</th> -->
                  <th>Date Of Insert</th>
                  <th>Date Of Update</th>
                  <th>View Detail</th>
                  <th>Edit</th>
                  <th>Active/Block</th>
                  <th>Action</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Post Id</th>
                  <th>Post Category Id</th>
                  <th>Post Title</th>
                  <!-- <th>Post Keyword</th> -->
                  <th>Post Descripation</th>
                  <!-- <th>Post Image</th> -->
                  <th>User Id</th>
                  <!-- <th>User Type</th> -->
                  <th>Date Of Insert</th>
                  <th>Date Of Update</th>
                  <th>View Detail</th>
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
                    $user_id=$row['user_id'];
              ?>
              <?php
                $qry2 = "SELECT * FROM user_tbl WHERE email_id='". $user_id ."'";
                $rs2 = mysqli_query($conn,$qry2);
                if(mysqli_num_rows($rs2) > 0)
                {
                  while($row2 = mysqli_fetch_assoc($rs2))
                  {
                    $fn=$row2['first_name'];
                    $ln=$row2['last_name'];
                    $type=$row2['user_type'];
                    $u_id=$row2['email_id'];
                  }
                }
              ?>
                <tr>
                  <td><?php echo $row['pid']; ?></td>
                  
                  <?php 
                  if(mysqli_num_rows($rs1) > 0)
                  {
                    $row1 = mysqli_fetch_assoc($rs1)
                  ?>
                  
                  <td><?php echo $row1['cat_name']; ?></td>
                  
                  <?php
                    }
                  ?>
                  
                  <td><?php echo $row['post_title']; ?></td>
                  <!-- <td><?php echo $row['post_keyword']; ?></td> -->
                  <td><?php echo $row['post_desc']; ?></td>
                  <!-- <td><?php echo $row['post_img']; ?></td> -->
                  <td><?php echo $fn.'&nbsp'.$ln; ?></td>
                  <!-- <td><?php echo $row['user_type']; ?></td> -->
                  <td><?php echo $row['doi']; ?></td>
                  <td><?php echo $row['dou']; ?></td>
                  <td><a href="view_post_detail.php?post_id=<?php echo $row['pid']; ?> && user_id=<?php echo $u_id; ?> && user_type=<?php echo $type; ?>">Datail</a></td>

                  <td><a href="edit_post.php?id=<?php echo $row['pid'];?> && cid=<?php echo $row['post_cat_id'];?> ">Edit</a></td>

                  <td><?php if($row['is_active']==1){echo "Active";}else{echo "Blocked";} ?></td>

                  <td><a href="post_unactive.php?id=<?php echo $row['pid'];?> && isactive=<?php echo $row['is_active']; ?>">Change</a></td>

                  <td><a href="delete_post.php?id=<?php echo $row['pid']; ?> && isactive=<?php echo $row['is_active']; ?>">Delete</a></td> 
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
        <!-- <a href="expert_unactive.php"><input type="submit" class="btn btn-primary btn-block" value="Unactive"></a> -->
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
            <a class="btn btn-primary" href="../login1.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>

</html>
