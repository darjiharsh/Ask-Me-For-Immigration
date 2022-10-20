<?php
session_start();
$mail=$_SESSION['mail'];

$post_id=$_GET['post_id'];
$user_id=$_GET['user_id'];
$user_type=$_GET['user_type'];

require '../../creartdemo1/database.php';
$qry="SELECT * FROM post_tbl WHERE pid=$post_id ";
$rs = mysqli_query($conn,$qry);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Post Detail - Ask Me</title>
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
      <div class="card-header">Post Detail</div>
      <div class="card-body">
        
        <?php
          if(mysqli_num_rows($rs) > 0)
          {
            while($row = mysqli_fetch_assoc($rs))
            {
              $user_id=$row['user_id'];
              $cat_id=$row['post_cat_id'];
        ?> 
        <?php
          $qry1 = "SELECT * FROM user_tbl WHERE email_id='". $user_id ."'";
          $rs1 = mysqli_query($conn,$qry1);
          if(mysqli_num_rows($rs1) > 0)
          {
            while($row1 = mysqli_fetch_assoc($rs1))
            {
              $image=$row1['image'];
              $fn=$row1['first_name'];
              $ln=$row1['last_name'];
              $user_type=$row1['user_type'];
            }
          }
        ?>
        <table>
          <tr>
            <td style="width:150px;"><img src="<?php echo $image; ?>" width="100px;" height="100px;"></td>
            <td colspan="2"><a href="view_profile_1.php?mail=<?php echo $row['user_id']; ?> && user_type=<?php echo $user_type; ?>"><?php echo '<b>'.$fn.'&nbsp'.$ln.'</b>'; ?></a></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td><b>Post Title</b></td>
            <td>:</td>
            <td><?php echo '&nbsp&nbsp&nbsp'.$row['post_title']; ?></td>
          </tr>
          <tr>
            <td><b>Post Descripation</b></td>
            <td>:</td>
            <td><?php echo '&nbsp&nbsp&nbsp'.$row['post_desc']; ?></td>
          </tr>
          <?php
            $qry2 = "SELECT * FROM cate_tbl WHERE cid=$cat_id";
            $rs2 = mysqli_query($conn,$qry2);
            if(mysqli_num_rows($rs2) > 0)
            {
              while($row2 = mysqli_fetch_assoc($rs2))
              {
                $cat_name=$row2['cat_name'];
              }
            }

            $cnt=0;
            $qry3 = "SELECT * FROM que_like WHERE p_id=$post_id";
            $rs3 = mysqli_query($conn,$qry3);

              if(mysqli_num_rows($rs3) > 0)
              {
                while($row3 = mysqli_fetch_assoc($rs3))
                  {
                    $cnt++;
                  }
              }
            $cnt1=0;
            $qry4 = "SELECT * FROM comment_tbl WHERE post_id=$post_id";
            $rs4 = mysqli_query($conn,$qry4);

            if(mysqli_num_rows($rs4) > 0)
            {
              while($row4 = mysqli_fetch_assoc($rs4))
                {
                  $cnt1++;
                }
            }
          ?>
          <tr>
            <td><b>Post Category</b></td>
            <td>:</td>
            <td><?php echo '&nbsp&nbsp&nbsp'.$cat_name; ?></td>
          </tr>
          <tr>
            <td><b>Post Keyword</b></td>
            <td>:</td>
            <td><?php echo '&nbsp&nbsp&nbsp'.$row['post_keyword']; ?></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3">
              <a href=""><input type="button" class="btn btn-info" value="Like <?php echo $cnt; ?>"></a> <a href="view_post_cmmt.php?post_id=<?php echo $post_id; ?> && user_id=<?php echo $user_id; ?> && user_type=<?php echo $user_type; ?>"><input type="button" class="btn btn-info" value="Comment <?php echo $cnt1; ?>"></a>
            </td>
            
          </tr>
          <tr>
            <td colspan="2"><a href="view_post.php"><input type="button" class="btn btn-info" value="Back"></a></td>
          </tr>
        </table>
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