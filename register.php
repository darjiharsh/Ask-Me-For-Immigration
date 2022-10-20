<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register - Ask Me</title>
  <?php
  require 'link.html';
  ?>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action="regi_code.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="txt_fn">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" name="txt_ln">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="txt_em">
          </div>
          
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              <label for="exampleInputPassword1">Password</label>
              <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="txt_pass">
              </div>
              <div class="col-md-6">
              <label for="exampleInputPassword2">Mobile No</label>
              <input class="form-control" id="exampleInputPassword2" type="text" placeholder="Mobile No" name="txt_mno">
            </div>
          </div><br>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
              <label for="exampleInputPassword3">Qualification</label>
              <input class="form-control" id="exampleInputPassword3" type="text" placeholder="Qualification" name="txt_qua">
              </div>
              <div class="col-md-6">
              <label for="exampleInputPassword4">User Type</label><br>
              <select name="user_type">
                <option value="1">Student</option>
                <option value="2">Expert</option>
              </select>
            </div>
          </div><br>

          <div class="form-group">
            <label for="exampleInputEmail2">Image</label>
            <input class="form-control" id="exampleInputEmail2" type="text" aria-describedby="emailHelp" placeholder="Enter Image" name="txt_img">
          </div>

          <input type="submit" class="btn btn-primary btn-block" name="btn_regi" value="Register">
        
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login1.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
