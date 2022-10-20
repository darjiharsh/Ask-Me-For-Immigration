 <select>
 	<option value="0">select State</option>
 <?php
          require "database.php";
          $id=$_POST['id'];
          $qry = "SELECT * FROM state_tbl WHERE country_id=$id";
          // echo $qry;
          $rs = mysqli_query($conn,$qry);
          if(mysqli_num_rows($rs)>0)
          {
            while($row = mysqli_fetch_assoc($rs))
             {
?>
          <option value="<?php echo $row['id']; ?>">
          <?php echo $row['state_name'];?> </option>

          <?php
            }
          }
          else
          {
            // echo "No Country Found !";
          }
          ?>
          
</select>
 