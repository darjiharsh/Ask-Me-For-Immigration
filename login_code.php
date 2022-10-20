<?php
	session_start();
    
	if(isset($_POST['btn_login']))
	{
		$em=$_POST['txt_em'];
		$pass=$_POST['txt_pass'];

		$_SESSION["mail"]=$_POST['txt_em'];
		$_SESSION["pass"]=$_POST['txt_pass'];

		require "../creartdemo1/database.php";

		$qry="SELECT * FROM user_tbl WHERE email_id='". $em ."' and password='". $pass ."'";

		$rs = mysqli_query($conn,$qry);
		if(mysqli_num_rows($rs) > 0)
  		{
  			while($row = mysqli_fetch_assoc($rs))
    		{
    			if($row['user_type']==2)
    			{
                    if($row['is_active']==1)
                    {
    				    header('location:expert/index.php');
                    }
                    else
                    {
                        echo "Sorry You Are Blocked";
                    }
    			}
    			elseif ($row['user_type']==1) 
    			{
    				echo "hello";
    			}
    			else
    			{
    				header('location:manage_country.php');
    			}
    		}

		}
	}
?>
