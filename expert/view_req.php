<?php
session_start();
$mail=$_SESSION['mail'];

require '../../creartdemo1/database.php';
$qry="SELECT * FROM req_tbl WHERE to_id='". $mail ."' AND is_active='1' ";
$rs = mysqli_query($conn,$qry);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Requests - Ask Me</title>
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
      <div class="card-header">Requests</div>
      <div class="card-body">
        
        <?php
          if(mysqli_num_rows($rs)>0)
          {
            while($row = mysqli_fetch_assoc($rs))
             {
              $id=$row['from_id'];
               $rid=$row['id']; 
        ?>
        <?php
          $qry1="SELECT * FROM user_tbl WHERE email_id='". $id ."' ";
          $rs1 = mysqli_query($conn,$qry1);
          if(mysqli_num_rows($rs1)>0)
          {
            while($row1 = mysqli_fetch_assoc($rs1))
             {
              $fn=$row1['first_name'];
              $ln=$row1['last_name'];
              $img=$row1['image']; 
              $path="../user/";
              }
          }
          else
          {
            echo "<h1>No Requests For You!</h1>";
          }         
        ?>
        <form method="post" action="req_accept_reject_code.php?uid=<?php echo $id; ?>&&rid=<?php echo $rid; ?>" enctype="mutlipart/form-data">
        <table>
          <tr>
            <td><img src=<?php echo $path.$img; ?> class="img img-circle" style="width: 50px;height: 50px;"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="width: 400px;"><?php echo '<b>'.$fn."&nbsp".$ln.'</b>'; ?></td>
            <td style="width: 100px;"><input type="submit" class="btn btn-primary" name="btn_accept" value="Accept"></td>
            <td style="width: 100px;"><input type="submit" class="btn btn-default" name="btn_reject" value="Reject"></td>
          </tr>
        </table>
      </form>
        <?php
            }
          }
          else
          {
              echo "<center><h3>No Requests For You!</h3></center>";            
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