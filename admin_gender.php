<?php
session_start();
$mail=$_SESSION["mail"];
?>

<?php
require '../creartdemo1/database.php';
$qry = "SELECT * FROM user_tbl WHERE email_id='". $mail ."'";
$rs = mysqli_query($conn,$qry);
if(mysqli_num_rows($rs) > 0)
{
  while($row = mysqli_fetch_assoc($rs))
  {
    $gender=$row['gender'];
    if($gender!=NULL)
    {
      header('location:admin_country.php');
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Add Gender And Address - Ask Me</title>
  <link href="askme/que.css" rel="stylesheet">
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
          <div class="page-content ask-question">

                <form method="post" action="admin_gender_code.php">
                <center>
                <input class="form-control" id="exampleInputName" type="hidden" aria-describedby="nameHelp" value="<?php echo $row['id']; ?>" name="id"><br>
        
                <label for="exampleInputName3"><b>Enter Your Address</b></label><br>
                <textarea class="form-control" type="text" name="txt_add" style="width:400px;"></textarea><br>

                
                <label for="exampleInputName"><b>Select Your Gender</b></label><br>
                <input type="radio" name="r1" value="male">Male&nbsp&nbsp&nbsp
                <input type="radio" name="r1" value="female">Female<br><br>

                <input type="submit" class="btn btn-primary" name="btn_gender" value="Done">
                </center>
                </form><br>

          <h4><center><a href="admin_edit_profile.php">Skip>></a></center></h4>
          <h4><center><a href="admin_country.php">Next</a></center></h4>

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
            <a class="btn btn-primary" href="login1.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>