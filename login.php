<!-- PHP Code starts here -->
<?php
     require('config.php');
     session_start();
     if(isset($_SESSION['is_logged_in'])){
          header('Location: loginSuccessPage.php');
     }
     if(!isset($_SESSION['is_logged_in_emp'])){
        echo '<script>alert("Login First")</script>'; 
     }
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $user_name = $_POST['user_name'];
          $password = $_POST['password'];
          $conn = connection();
          $sql = "SELECT `user_id`, `user_name`, `email`, `mobile_no` FROM `users` WHERE `user_name` = '$user_name' and `password` = '$password'";
          $return_value = mysqli_query($conn, $sql);

          if(!$return_value){
               echo mysqli_error($conn);
            //    disconnect($conn);
          }
        // After Login
        $flag = 0;
        while($row = mysqli_fetch_array($return_value, 1)){
            $flag = 1;
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_name'] = $user_name;
            header('Location: loginSuccessPage.php');
        } 
        if($flag == 0){
            echo "User Name or Password is incorrect";
            echo '<script>alert("User Name or Password is incorrect")</script>'; 
        }

      }
?>
<!-- HTML Code starts here -->
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <title>Login as Job Seeker</title>
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
            <h1> Login as Job Seeker </h1>
            <div class="form-group">
                <label for="user_name">User Name:</label><br>
                <input type="text" id="user_name" name="user_name" class="form-control" required><br><br>
            </div>    
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" class="form-control" required><br><br>
                <!-- <input type="submit" class = "btn" name = "Login_emp" value="Login as Employer"> -->
                <input type="submit" value="Login">
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


