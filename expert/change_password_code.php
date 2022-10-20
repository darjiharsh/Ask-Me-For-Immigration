<?php
  session_start();
  $mail=$_SESSION['mail'];
  $pass=$_SESSION['pass'];

  $opass=$_POST['txt_current_pass'];
  $npass=$_POST['txt_new_pass'];
  $cpass=$_POST['txt_confirm_pass'];

  require '../../creartdemo1/database.php';
  $qry = "SELECT * FROM user_tbl WHERE email_id='". $mail ."'";
  $rs = mysqli_query($conn,$qry);
  if(mysqli_num_rows($rs) > 0)
  	{
  		while($row = mysqli_fetch_assoc($rs))
    	{
    		if($row['password']==$opass)
    		{
    			if($npass==$cpass)
    			{
    				$qry1="UPDATE user_tbl SET password='".$cpass."' WHERE email_id='". $mail ."'";
    				$rs1 = mysqli_query($conn,$qry1);
 					if($rs1)
 					{
 						header('location:../login1.php');
 					}
    			}
    		}
    		
    	}

	}

?>