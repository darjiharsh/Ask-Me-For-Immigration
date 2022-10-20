<?php
session_start();
$mail=$_SESSION['mail'];

$fid=$_GET['name'];
$id=$_GET['id'];

require '../../creartdemo1/database.php';

$qry="SELECT * FROM inbox_outbox WHERE id='$id' ";

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
  <title>View Outbox Message - Ask Me</title>
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
        require 'link.html';
        require 'link.php';
        if(mysqli_num_rows($rs) > 0)
                {
                  while($row = mysqli_fetch_assoc($rs))
                  {
                    // $fid=$row['from_id'];
                    $sub=$row['sub'];
                    $msg=$row['msg'];
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
      <div class="card-header">View Message</div>
      <div class="card-body">

              <form method="post">
              <div class="form-group">

                <div class="form-row">
                    <label for="exampleInputPassword1"><b>From</b></label>
                    <input class="form-control" id="exampleInputPassword1" type="text" readonly value="<?php echo $fid; ?>">
              </div><br>
                    
                <div class="form-row">
                    <label for="exampleInputPassword2"><b>Subject </b></label>
                    <input class="form-control" id="exampleInputPassword2" type="text" readonly value="<?php echo $sub; ?>">
                </div><br>
                <div class="form-row">
                    <label for="exampleInputPassword3"><b>Message </b></label><br>
                    <textarea type="text" class="form-control" id="exampleInputPassword3" readonly><?php echo $msg; ?></textarea>
                </div><br>
                <div class="form-row">
                    <a href="msg_outbox.php"><input type="button" class="btn btn-primary" value="Back"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <!-- <a href="msg_reply.php?fid=<?php echo $fid; ?>&&id=<?php echo $id; ?>"><input type="button" class="btn btn-primary" value="Reply"></a> -->
                </div><br>
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
