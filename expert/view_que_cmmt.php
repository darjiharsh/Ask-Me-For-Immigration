<?php
  session_start();
  $mail=$_SESSION['mail'];

  $que_id=$_GET['que_id'];
  $user_id=$_GET['user_id'];
  $user_type=$_GET['user_type'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>View Comments- Ask Me</title>
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
                $img=$row2['image'];
                $type=$row2['user_type'];
                $em=$row2['email_id'];
              }
            }

            $cnt=0;
            $qry4 = "SELECT * FROM que_like WHERE q_id='". $que_id ."'";
            $rs4 = mysqli_query($conn,$qry4);

            if(mysqli_num_rows($rs4) > 0)
            {
            while($row4 = mysqli_fetch_assoc($rs4))
              {
                $cnt++;
              }
            }
            ?>
                <div class="page-content ask-question" style="height: auto;">
                  <table>

                    <tr>
                      <?php
                        if($type==1)
                        {
                          $path="../user/";
                      ?>
                      <td><img src="<?php echo $path.$img; ?>" style="width:50px; height:50px;"></td>
                      <?php
                        }
                        else
                        {
                      ?>
                      <td><img src="<?php echo $img; ?>" style="width:50px; height:50px;"></td>
                      <?php
                        }
                      ?>
                      <td>&nbsp&nbsp&nbsp</td>
                      <td><a href="view_profile_1.php?mail=<?php echo $em; ?> && user_type=<?php echo $type; ?>"><?php echo "<b>".$fn."&nbsp".$ln."</b>"; ?></a></td><br>
                    </tr>

                  </table><hr>
                  <?php

                    $qry3 = "SELECT * FROM que_tbl WHERE id='". $que_id ."' ";
                    $rs3 = mysqli_query($conn,$qry3);
                      if(mysqli_num_rows($rs3) > 0)
                      {
                        while($row3 = mysqli_fetch_assoc($rs3))
                        {
                            $title=$row3['que_title'];
                            $desc=$row3['que_desc'];
                        }
                      }
                    ?>

                    <table>

                    <tr>
                      <td style="width:250px;"><h5>Question Title</h5></td>
                      <td><?php echo ":&nbsp&nbsp&nbsp".$title; ?></td>
                    </tr>

                    <tr>
                      <td><h5>Question Description</h5></td>
                      <td><?php echo ":&nbsp&nbsp&nbsp".$desc; ?></td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td><a href="ans_like.php?uid=<?php echo $mail; ?> && qid=<?php echo $que_id; ?>"><input type="button" name="btn_like" class="btn btn-info" value="Like <?php echo $cnt; ?>"></a></td>
                    </tr>
                  </table><hr><br>

                    <?php
                    $qry1 = "SELECT * FROM comment_tbl WHERE que_id='". $que_id ."' ";
                    $rs1 = mysqli_query($conn,$qry1);
                      if(mysqli_num_rows($rs1) > 0)
                      {
                        while($row1 = mysqli_fetch_assoc($rs1))
                        {
                            $comment=$row1['comment'];
                            $u_id=$row1['user_id'];
                            $cmmt_id=$row1['id'];

                            $qry5 = "SELECT * FROM user_tbl where email_id='". $u_id ."' ";
                            $rs5 = mysqli_query($conn,$qry5);
                            if(mysqli_num_rows($rs5) > 0)
                            {
                              while($row5 = mysqli_fetch_assoc($rs5))
                              {
                                $image1=$row5['image'];
                                $fn1=$row5['first_name'];
                                $ln1=$row5['last_name'];
                                $user_type1=$row5['user_type'];
                                $email1=$row5['email_id'];
                              }
                            }
                            if($user_type1==1)
                            {
                              $path="../user/";
                              echo '<img src='.$path.$image1.' width="50px" style="margin-left:30px";>';
                            }
                            else
                            {
                              echo '<img src='.$image1.' width="50px" style="margin-left:30px";> ';
                            }
                            echo '&nbsp&nbsp<b><a href="view_profile_1.php?mail='.$email1.' && user_type='.$user_type1.'" style="color:black;">'.$fn1.'&nbsp'.$ln1.'</b></a><br>';
                            echo '<b style="margin-left:90px;">Comment - </b> <div class="com" style="width:80%; height:auto; margin-left:90px;" >'.$comment.'</div>';
                      ?>
                      <b style="margin-left:90px; margin-top: -10px;"><a href="view_reply.php?cmmt_id=<?php echo $cmmt_id; ?> && user_id=<?php echo $u_id; ?> && user_type=<?php echo $user_type1; ?>">
                      Reply</b></a><br><br>
                      <?php
                          }
                        }
                      ?><hr>

                  

                  <form method="post" action="view_que_cmmt_code.php?que_id=<?php echo $que_id; ?> && user_id=<?php echo $user_id; ?> && user_type=<?php echo $user_type; ?>">
                    
                    <div class="input-group">
                      <input type="text" class="form-control" name="txt_cmmt" placeholder="Write Your Answer" aria-describedby="basic-addon2">
                      <input type="submit" name="btn_cmmt" value="Send" class="btn btn-info">
                    </div>
                    
                  </form>
               </div>

            
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
