<?php
     require('config.php');
     include('layout/header.php');
          $conn = connection();
          $sql = "SELECT `user_id`, `user_name`, `email`, `mobile_no`, `password`, `forgot_password_code` FROM `users`";
          $return_value = mysqli_query($conn, $sql);
          if(!$return_value){
               echo "Something went wrong".mysqli_error($conn);
               disconnect($conn);
          }
          echo "<h2>List of all Users</h2>";
          echo "<table border = '1'> <tr> <th>User ID</th> <th>User Name</th> <th>Email</th> <th>Mobile No</th>";
          while($row = mysqli_fetch_array($return_value, 1)){
              echo "<tr><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>".$row['email']."</td><td>".$row['mobile_no']."</td></tr>";
              echo "<br>";
          }
          echo "</table>";
?>
<?php include('layout/footer.php'); ?>
