<?php
  session_start();
  $mail=$_SESSION['mail'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>View Quetions- Ask Me</title>
  <link href="../askme/que.css" rel="stylesheet">
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
          <div class="col-md-9">
          <?php
          require '../../creartdemo1/database.php';
          $qry1 = "SELECT * FROM que_tbl WHERE is_active=1 ORDER BY id desc";
          $rs1 = mysqli_query($conn,$qry1);
            if(mysqli_num_rows($rs1) > 0)
            {
              while($row1 = mysqli_fetch_assoc($rs1))
              {
                $qid=$row1['id'];
                $uid=$row1['user_id'];
                $title=$row1['que_title'];
                $desc=$row1['que_desc'];
            ?>
            <?php
            $qry2 = "SELECT * FROM user_tbl WHERE email_id='". $uid ."'";
            $rs2 = mysqli_query($conn,$qry2);

              if(mysqli_num_rows($rs2) > 0)
              {
              while($row2 = mysqli_fetch_assoc($rs2))
                {
                  $fn=$row2['first_name'];
                  $ln=$row2['last_name'];
                  $img=$row2['image'];
                  $user_type=$row2['user_type'];
                  $path="../user/";
              ?>

              <?php
                $cnt=0;
                $qry3 = "SELECT * FROM que_like WHERE q_id=$qid";
                $rs3 = mysqli_query($conn,$qry3);

                  if(mysqli_num_rows($rs3) > 0)
                  {
                    while($row3 = mysqli_fetch_assoc($rs3))
                      {
                        $cnt++;
                      }
                  }
              ?>

              <?php
                $cnt1=0;
                $qry4 = "SELECT * FROM comment_tbl WHERE que_id=$qid";
                $rs4 = mysqli_query($conn,$qry4);

                  if(mysqli_num_rows($rs4) > 0)
                  {
                    while($row4 = mysqli_fetch_assoc($rs4))
                      {
                        $id=$row4['id'];
                        $cnt1++;
                      }
                  }
              ?>

               <div class="page-content ask-question" style="height: auto;">
                  <table>

                    <tr>
                      <td><img src="<?php echo $path.$img; ?>" style="width:50px; height:50px;"></td>
                      <td>&nbsp&nbsp&nbsp</td>
                      <td><a href="view_profile_1.php?mail=<?php echo $row2['email_id']; ?> && user_type=<?php echo $row2['user_type']; ?>"><?php echo "<b>".$fn."&nbsp".$ln."</b>"; ?></a></td><br>
                    </tr>

                  </table><hr>

                  <table>

                    <tr>
                      <td style="width:250px;"><h5>Question Title</h5></td>
                      <td><?php echo ":&nbsp&nbsp&nbsp".$title; ?></td>
                    </tr>

                    <tr>
                      <td><h5>Question Description</h5></td>
                      <td><div class="com" style="width:80%; height: auto;"><?php echo ":&nbsp&nbsp&nbsp".$desc; ?></td>
                    </tr>

                  </table><hr>

                  <table>

                    <tr colspan="2">
                      <td>
                        <label><a href="ans_like.php?uid=<?php echo $mail; ?> && qid=<?php echo $qid; ?>"><input type="button" name="btn_like" class="btn btn-info" value="Like <?php echo $cnt; ?>"></a></label>&nbsp&nbsp&nbsp
                        <label><a href="view_que_cmmt.php?que_id=<?php echo $qid; ?> && user_id=<?php echo $uid ?> && user_type=<?php echo $user_type; ?>"><input type="button" name="btn_ans" class="btn btn-info" value="Answer <?php echo $cnt1; ?> "></a></label>
                      </td>
                    </tr>

                  </table>

                  <form method="post" action="cmmt_code.php?qid=<?php echo $qid; ?>">
                    
                    <div class="input-group">
                      <input type="text" class="form-control" name="txt_cmmt" placeholder="Write Your Answer" aria-describedby="basic-addon2">
                      <!-- <textarea type ="text" class="form-control" name="txt_cmmt" placeholder="Write Your Answer" aria-describedby="basic-addon2" style="width: 80%;"></textarea> -->
                      <input type="submit" name="btn_cmmt" value="Send" class="btn btn-info">
                    </div>
                    
                  </form>
               </div>

            <?php
              }
            }
            ?>
            <?php
              }
            }
            ?>
          </div>
        
          </div>
          <!-- <div class="col-lg-1"></div> -->
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
