<?php
session_start();
$mail=$_SESSION["mail"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Profile - Ask Me</title>
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
          
          <?php
            require '../../creartdemo1/database.php';
            $qry = "SELECT * FROM user_tbl WHERE email_id='". $mail ."'";
            $rs = mysqli_query($conn,$qry);
            if(mysqli_num_rows($rs) > 0)
            {
              while($row = mysqli_fetch_assoc($rs))
              {
                $img=$row['image'];
          ?>
                <div class="col-md-6">
                  <?php
                echo '<img src="'.$img.'" class="img img-circle" height="250px" width="300px"  >';
                ?>
                </div><br>
                <div class="col-md-6">
                <label for="exampleInputName3">Email Id</label>
                <input class="form-control" id="exampleInputName3" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row['email_id']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row['first_name']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName2">Last name</label>
                <input class="form-control" id="exampleInputName2" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row['last_name']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName4">Mobile No</label>
                <input class="form-control" id="exampleInputName4" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row['mobile_no']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName5">Qualification</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row['qualification']; ?>"></div><br>

                <?php
                  $qry1 = "SELECT * FROM expert_tbl WHERE user_id='". $mail ."'";
                  $rs1 = mysqli_query($conn,$qry1);
                  if(mysqli_num_rows($rs1) > 0)
                  {
                    while($row1 = mysqli_fetch_assoc($rs1))
                    {
                ?>

                <?php
                  if($row1['expert_key_skills']!=null)
                  {
                ?>

                <div class="col-md-6">
                <label for="exampleInputName5">Skills</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row1['expert_key_skills']; ?>"></div><br>

                <?php
                  }
                ?>

                <?php
                  if($row1['expert_desc']!=null)
                  {
                ?>

                <div class="col-md-6">
                <label for="exampleInputName5">Descripation</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row1['expert_desc']; ?>"></div><br>

                <?php
                  }
                ?>

                <?php
                    }
                  }
                ?>

                <?php
                  if($row['gender']!=null)
                  {
                ?>

                <div class="col-md-6">
                <label for="exampleInputName5">Gender</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row['gender']; ?>"></div><br>

                <?php
                  }
                ?>

                 <?php
                  if($row['address']!=null)
                  {
                ?>

                <div class="col-md-6">
                <label for="exampleInputName5">Address</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" readonly value="<?php echo $row['address']; ?>"></div><br>

                <?php
                  }
                ?>

                <?php
                  if($row['country_id']!=null)
                  {
                    $country_id=$row['country_id'];
                    $state_id=$row['state_id'];
                    $city_id=$row['city_id'];

                    $qry2 = "SELECT * FROM country_tbl WHERE id=$country_id";
                    $rs2 = mysqli_query($conn,$qry2);
                    $row2 = mysqli_fetch_assoc($rs2);
                    $country_name=$row2['name'];

                    $qry3 = "SELECT * FROM state_tbl WHERE id=$state_id";
                    $rs3 = mysqli_query($conn,$qry3);
                    $row3 = mysqli_fetch_assoc($rs3);
                    $state_name=$row3['state_name'];

                    $qry4 = "SELECT * FROM city_tbl WHERE id=$city_id";
                    $rs4 = mysqli_query($conn,$qry4);
                    $row4 = mysqli_fetch_assoc($rs4);
                    $city_name=$row4['city_name'];

                ?>

                <div class="col-md-6">
                <label for="exampleInputName5">Address</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" readonly value="<?php echo $country_name; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName5">State</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" readonly value="<?php echo $state_name; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName5">City</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" readonly value="<?php echo $city_name; ?>"></div><br>

                <?php
                  }
                ?>

                
          <?php
              }
            }
          ?>

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