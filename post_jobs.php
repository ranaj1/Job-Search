<?php
     require('config.php');
    //  include('layout/header.php');
     session_start();
     if(!isset($_SESSION['is_logged_in_emp'])){
          header('Location: login_emp.php');
     }

     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $emp_name = $_SESSION['emp_name'];
        $job_emp = $_POST['job_emp'];
        $job_category = $_POST['job_category'];
        $job_salary = $_POST['job_salary'];
        $job_location = $_POST['job_location'];
        // Check whether emp_name already exists or not 
        $conn = connection();
  
             $sql = "INSERT INTO `jobs_posted`(`job_id`, `emp_name`, `job_emp`, `job_category`, `job_salary`, `job_location`) VALUES ('','$job_emp', '$emp_name', '$job_category','$job_salary','$job_location')";
             $return_value = mysqli_query($conn, $sql);
             if(!$return_value){
                  echo "Something went wrong".mysqli_error($conn);
                  // disconnect($conn);

             }
             else{
                  echo "Job registered successfully";
                  echo "<br><a href = viewAllJobsPosted.php>All Posted Jobs</a>";
                  exit();
             }

        }
?>
<!-- HTML Code start here -->
<html>
<html>
    <head>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <title>Post a Job</title>
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
      <h1> Post a Job</h1>
      <div class="form-group">
      <label for="job_emp">Job Employer:</label><br>
      <input type="text" id="job_emp" name="job_emp" required class="form-control"><br><br>
      </div> 

      <div class="form-group">
      <label for="job_category">Job Category:</label><br>
      <input type="text" id="job_category" name="job_category" required class="form-control"><br><br>
      </div> 

      <div class="form-group">
      <label for="job_salary">Salary:</label><br>
      <input type="text" id="job_salary" name="job_salary" required class="form-control"><br><br>
      </div> 

      <div class="form-group">
      <label for="job_location">Location:</label><br>
      <input type="text" id="job_location" name="job_location" required class="form-control"><br><br>
      <input type="submit" class = 'btn' value="Post Job">
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

