<?php
session_start();
$mail=$_SESSION['mail'];

$mail1=$_GET['to_id'];

require '../../creartdemo1/database.php';

if($mail==$mail1)
{
  header('location:expert_view_profile.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Profile - Ask Me</title>
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
          <div class="card-body">

            <?php

              $path="../user/";
              $qry1 = "SELECT * FROM user_tbl WHERE email_id='". $mail1 ."'";
              $rs1 = mysqli_query($conn,$qry1);
              if(mysqli_num_rows($rs1) > 0)
              {
                while($row1 = mysqli_fetch_assoc($rs1))
                  {
                    $img=$row1['image'];
                    $user_type=$row1['user_type'];
                    
            ?>
            <center>
            
                <img src="<?php echo $path.$img ?>" style="width:100px;height:100px;">

            <?php
                    echo '&nbsp&nbsp&nbsp<b>'.$row1['first_name'].'&nbsp&nbsp'.$row1['last_name'].'</b><br><br>';
                    

                    $qry2 = "SELECT * FROM follow_unfollow_tbl WHERE user_id='". $mail ."' AND following='". $mail1 ."' ";
                    $rs2 = mysqli_query($conn,$qry2);

                    if(mysqli_num_rows($rs2) > 0)
                    {

                      while($row2 = mysqli_fetch_assoc($rs2))
                        {
                          if($row2['is_active']==1)
                            {
                              
                              echo '<input type="button" value="Following" class="btn btn-info" style="width:210px;">';
                              
                              echo "</center><br><br><br><br>";
                              $qry3 = "SELECT * FROM que_tbl WHERE user_id='". $mail1 ."'";
                              $rs3 = mysqli_query($conn,$qry3);

                              if(mysqli_num_rows($rs3) > 0)
                              {
                                while($row3 = mysqli_fetch_assoc($rs3))
                                  {
                                    $qid=$row3['id'];
                                    $title=$row3['que_title'];
                                    $tag=$row3['que_tag'];
                                    $cat=$row3['que_cat'];
                                    $desc=$row3['que_desc'];
                                  
                                    $qry4 = "SELECT * FROM cate_tbl WHERE cid=$cat";
                                    $rs4 = mysqli_query($conn,$qry4);

                                    if(mysqli_num_rows($rs4) > 0)
                                    {
                                      while($row4 = mysqli_fetch_assoc($rs4))
                                        {
                                            $name=$row4['cat_name'];
                                        ?>
                                        <table>

                                          <?php
                                            $cnt=0;
                                            $qry6 = "SELECT * FROM que_like WHERE q_id=$qid";
                                            $rs6 = mysqli_query($conn,$qry6);

                                              if(mysqli_num_rows($rs6) > 0)
                                              {
                                                while($row6 = mysqli_fetch_assoc($rs6))
                                                  {
                                                    $cnt++;
                                                  }
                                              }

                                              $cnt1=0;
                                              $qry7 = "SELECT * FROM comment_tbl WHERE que_id=$qid";
                                              $rs7 = mysqli_query($conn,$qry7);

                                                if(mysqli_num_rows($rs7) > 0)
                                                {
                                                  while($row7 = mysqli_fetch_assoc($rs7))
                                                    {
                                                      $cnt1++;
                                                    }
                                                }
                                          ?>

                                          <tr>
                                            <td style="width:250px;"><h5>Questions Title </h5></td>
                                            <td><?php echo ":&nbsp&nbsp&nbsp".$title; ?></td>
                                          </tr>

                                          <tr>
                                            <td><h5>Questions Category</h5></td>
                                            <td><?php echo ":&nbsp&nbsp&nbsp".$name; ?></td>
                                          </tr>

                                          <tr>
                                            <td><h5>Questions Tag</h5></td>
                                            <td><?php echo ":&nbsp&nbsp&nbsp".$tag; ?></td>
                                          </tr>

                                          <tr>
                                            <td><h5>Questions Description</h5></td>
                                            <td><?php echo ":&nbsp&nbsp&nbsp".$desc; ?></td>
                                          </tr><hr>
                                        </table><hr>
                                        <a href="ans_like1.php?uid=<?php echo $mail; ?> && qid=<?php echo $qid; ?> && to_id=<?php echo $mail1; ?>"><input type="button" class="btn btn-info" value="Like <?php echo $cnt; ?>"></a>
                                        <a href="view_que_cmmt.php?que_id=<?php echo $qid; ?> && user_id=<?php echo $mail1; ?> && user_type=<?php echo $user_type; ?>"><input type="button" class="btn btn-info" value="Comment <?php echo $cnt1; ?>"></a><br><br>
                                        <form class="input-group" method="post" action="cmmt_code1.php?to_id=<?php echo $mail1; ?> && qid=<?php echo $row3['id']; ?>">
                                          <table>
                                            <tr>
                                              <td>
                                                <input type="text" class="form-control" name="txt_cmmt" style="width:500px;" placeholder="Answer">
                                              </td>
                                              <td>
                                                <input type="submit" name="btn_cmmt" class="btn btn-info" value="Send">
                                              </td>
                                            </tr>
                                          </table>
                                        </form>
                                        <?php
                                            // echo '<h3>Questions Title : '.$title.'<br>';
                                            // echo '<h3>Questions Category : '.$tag.'<br>';
                                            // echo '<h3>Questions Tag : '.$name.'<br>';
                                            // echo '<h3>Questions Description : '.$desc.'<br><br><hr>';

                                        }
                                    }
                                  }
                              }
                            }
                        }
                    }
                    else
                    {
                        $qry5 = "SELECT * FROM req_tbl WHERE from_id='". $mail ."' AND to_id='". $mail1 ."' ";
                        $rs5 = mysqli_query($conn,$qry5);
                        if(mysqli_num_rows($rs5) > 0)
                        {
                          while($row5 = mysqli_fetch_assoc($rs5))
                          {
                            if($row5['is_active']==1)
                            {
                              echo "<center><input type='button' class='btn btn-info' value='Requested' style='width:210px;'></center>";
                            }
                          }
                        }
                        if(mysqli_num_rows($rs5) == 0)
                        {
                          echo "<center><a href='follow_req_send_code.php?from=$mail && to=$mail1'><input type='button' class='btn btn-info' value='Request' style='width:210px;'></a></center>";
                        } 
                    }
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
            <a class="btn btn-primary" href="../login1.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>