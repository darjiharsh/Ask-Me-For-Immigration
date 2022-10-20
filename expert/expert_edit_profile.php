<?php
session_start();
$mail=$_SESSION["mail"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Profile - Ask Me</title>
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
          ?>
                <form method="post" action="expert_edit_profile_code.php?img=<?php echo $row['image'];?>" enctype="multipart/form-data">

                <div class="col-md-6">
                <img src="<?php echo $row['image'];?>" height="250px" width="300px"/><br><br>
                <input type="file" name="txt_img">
                </div><br>
                <div class="col-md-6">
                <label for="exampleInputName3">Email Id</label>
                <input class="form-control" id="exampleInputName3" type="text" aria-describedby="nameHelp" name="txt_em" readonly value="<?php echo $row['email_id']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="txt_fn" value="<?php echo $row['first_name']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName2">Last name</label>
                <input class="form-control" id="exampleInputName2" type="text" aria-describedby="nameHelp" name="txt_ln" value="<?php echo $row['last_name']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName4">Mobile No</label>
                <input class="form-control" id="exampleInputName4" type="text" aria-describedby="nameHelp" name="txt_mno" value="<?php echo $row['mobile_no']; ?>"></div><br>

                <div class="col-md-6">
                <label for="exampleInputName5">Qualification</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" name="txt_qua" value="<?php echo $row['qualification']; ?>"></div><br>

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
                <input class="form-control" id="exampleInputName5" type="text" name="txt_skills" aria-describedby="nameHelp"  value="<?php echo $row1['expert_key_skills']; ?>"></div><br>

                <?php
                  }
                ?>

                <?php
                  if($row1['expert_desc']!=null)
                  {
                ?>

                <div class="col-md-6">
                <label for="exampleInputName5">Descripation</label>
                <input class="form-control" id="exampleInputName5" type="text" name="txt_desc" aria-describedby="nameHelp"  value="<?php echo $row1['expert_desc']; ?>"></div><br>

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
                <label>Gender</label>&nbsp&nbsp&nbsp
                <input type="radio" name="r1" value="male" <?php if($row['gender']=="male"){ echo "checked"; } ?> >&nbspMale &nbsp&nbsp&nbsp
                <input type="radio" name="r1" value="female" <?php if($row['gender']=="female"){ echo "checked"; } ?> >&nbspFemale</div>

                <?php
                  }
                ?>

                 <?php
                  if($row['address']!=null)
                  {
                ?>

                <div class="col-md-6">
                <label for="exampleInputName5">Address</label>
                <input class="form-control" id="exampleInputName5" type="text" aria-describedby="nameHelp" value="<?php echo $row['address']; ?>"></div><br>

                <?php
                  }
                ?>

                <?php
                  if($row['country_id']!=null)
                  {
                    $country_id=$row['country_id'];
                    $state_id=$row['state_id'];
                    $city_id=$row['city_id'];

                    $qry2 = "SELECT * FROM country_tbl";
                    $rs2 = mysqli_query($conn,$qry2);

                    $qry3 = "SELECT * FROM state_tbl";
                    $rs3 = mysqli_query($conn,$qry3);
                    

                    $qry4 = "SELECT * FROM city_tbl";
                    $rs4 = mysqli_query($conn,$qry4);

                ?>

                <div class="col-md-6">
                <label>Country</label><br>
                <select name="country" style="width: 200px;">
                  <?php
                    if(mysqli_num_rows($rs2)>0)
                    {
                      while($row2 = mysqli_fetch_assoc($rs2))
                       {
                    ?>

                     <option value="<?php echo $row2['id']; ?>" <?php if($country_id==$row2['id']){echo "selected";} ?>>
                     <?php echo $row2['name'];?> </option>

                    <?php
                       }
                      }
                    ?>
                </select></div><br>  

                <div class="col-md-6">
                <label>State</label><br>
                <select name="state" style="width: 200px;">
                  <?php
                    if(mysqli_num_rows($rs3)>0)
                    {
                      while($row3 = mysqli_fetch_assoc($rs3))
                       {
                    ?>

                     <option value="<?php echo $row3['id']; ?>" <?php if($state_id==$row3['id']){echo "selected";} ?>>
                     <?php echo $row3['state_name'];?> </option>

                    <?php
                       }
                      }
                    ?>
                </select></div><br>

                <div class="col-md-6">
                  <label>City</label><br>
                  <select name="city" style="width: 200px;">
                    <?php
                      if(mysqli_num_rows($rs4)>0)
                      {
                        while($row4 = mysqli_fetch_assoc($rs4))
                         {
                      ?>

                       <option value="<?php echo $row4['id']; ?>" <?php if($city_id==$row4['id']){echo "selected";} ?>>
                       <?php echo $row4['city_name'];?> </option>

                      <?php
                         }
                        }
                      ?>
                  </select></div><br>

                <?php
                  }
                ?>

                <div class="col-md-6">
                <input type="submit" class="btn btn-primary btn-block" name="btn_edit" value="Edit">
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