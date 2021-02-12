<?php
     require('config.php');
     session_start();
     if(!isset($_SESSION['is_logged_in_emp'])){
        echo '<script>alert("Login First")</script>'; 
     }
     if(isset($_SESSION['is_logged_in_emp'])){
          header('Location: loginSuccessPage.php');
     }
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $emp_name = $_POST['emp_name'];
          $emp_password = $_POST['emp_password'];
          $conn = connection();
          $sql = "SELECT `emp_id`, `emp_name`, `emp_email`, `emp_mobile_no`, `emp_password` FROM `emp` WHERE  `emp_name` = '$emp_name' and `emp_password` = '$emp_password'";
          $return_value = mysqli_query($conn, $sql);

          if(!$return_value){
               echo mysqli_error($conn);
          }
        // After Login
        $flag = 0;
        while($row = mysqli_fetch_array($return_value, 1)){
            $flag = 1;
            $_SESSION['is_logged_in_emp'] = true;
            $_SESSION['emp_name'] = $emp_name;
            header('Location: loginSuccessPage.php');
        } 
        if($flag == 0){
            echo '<script>alert("User Name or Password is incorrect")</script>'; 
        }

      }
?> 
<!-- HTML Code Starts Here -->
<html>
    <head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <title>Login As Employer</title>
    </head>
    <body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="ind.php" class="logo">
                            </span> <span class="title"><strong style="color:black; font-size:20px">Rise and Shine<em style="color:orange">.</em></strong>							</a>

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
            <h1> Login As Employer </h1>
            <div class="form-group">
                <label for="emp_name">User Name:</label><br>
                <input type="text" id="emp_name" name="emp_name" class="form-control" required><br><br>
            </div>    
            <div class="form-group">
                <label for="emp_password">Password:</label><br>
                <input type="password" id="emp_password" name="emp_password" class="form-control" required><br><br>
                <input type="submit" value="Login">
            </div>    
            </form>  
        </div>    
        </div>
        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
    </body>
</html>    


