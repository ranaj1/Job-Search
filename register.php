<?php
     require('config.php');
     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $user_name = $_POST['user_name'];
          $email = $_POST['email'];
          $mobile_no = $_POST['mobile_no'];
          $password = $_POST['password'];
          // Check whether user_name already exists or not 
          $conn = connection();
          $sql_search = "SELECT `user_name` FROM `users` WHERE `user_name` = '$user_name'";
          $return_search_value = mysqli_query($conn, $sql_search);
          if (mysqli_num_rows($return_search_value) > 0){
               echo "User Name already exists, Try to login";
               echo "<br><a href=login.php>Login</a><br>";
               mysqli_disconnect($conn);
               // header("Location: login.php".php          else{
               $sql = "INSERT INTO `users`(`user_id`, `user_name`, `email`, `mobile_no`, `password`, `forgot_password_code`) VALUES ('', '$user_name', '$email', '$mobile_no', '$password','')";
               $return_value = mysqli_query($conn, $sql);
               if(!$return_value){
                    echo "Something went wrong".mysqli_error($conn);
                    // disconnect($conn);

               }
               else{
                    echo "User registered successfully";
                    echo "<br><a href = index.php>HOME</a>";
                    // disconnect($conn);
                    exit();
               }

          }
     }
?>


<!-- HTML Code starts here -->
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <title>Register as Job Seeker</title>
    </head>

    <body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="ind.php" class="logo">
                            </span> <span class="title"><strong style="color:black; font-size:20px">Rise and Shine<em style="color:orange">.</em></strong></span>
								</a>

						<!-- Nav -->
							<nav>
								<ul>
									<li><a href="#menu">Menu</a></li>
								</ul>
							</nav>

					</div>
				</header>

			<!-- Menu -->
			<nav id="menu">
				<h2>Menu</h2>
				<ul>
					<li><a href="ind.php" class="active">Home</a></li>
					<li><a href=login.php>Login as Job Seeker</a></li>
					<li><a href=register.php>Register as Job Seeker</a></li>
					<li><a href=login_emp.php>Login as Job Employer</a></li>
					<li><a href=register_emp.php>Register as Job Employer</a></li>
					<li><a href="jobs.html">Find Jobs</a></li>
					<li><a href="post_jobs.php">Post Jobs</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
				</ul>
			</nav>

    <div class="container">
        <form action=""method="POST">
        <h1> Register as Job Seeker</h1>
        <div class="form-group">
        <label for="user_name">User Name:</label><br>
        <input type="text" id="user_name" name="user_name" required class="form-control"><br><br>
        </div> 

        <div class="form-group">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required class="form-control"><br><br>
        </div> 

        <div class="form-group">
        <label for="mobile_no">Mobile No:</label><br>
        <input type="number" id="mobile_no" name="mobile_no" required class="form-control"><br><br>
        </div> 

        <div class="form-group">
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required class="form-control"><br><br>
        <input type="submit" class = 'btn' value="Register">
        </div>
        </form>   
     </div>   
     </div>
    </body>
       <!-- Scripts -->
       <script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
</html>

