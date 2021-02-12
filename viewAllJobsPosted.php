<?php
     require('config.php');
          session_start();
          $conn = connection();
        //   if(!isset($Session['emp_name'])){
        //     echo '<script>alert("Login First")</script>'; 
        //     header('Location: login_emp.php');
        //   }
          $emp_name = $_SESSION['emp_name'];
        //   echo $emp_name;
          $sql = "SELECT `emp_name`, `job_category`, `job_salary`, `job_location` FROM `jobs_posted` WHERE `job_emp` = '$emp_name' ";
          $return_value = mysqli_query($conn, $sql);
          if(!$return_value){
               echo "Something went wrong".mysqli_error($conn);
               disconnect($conn);
          }
          echo "<h2>List of all posted jobs</h2>";
          echo "<table border = '1'> <tr> <th>Employer</th> <th>Category</th> <th>Salary</th> <th>Location</th>";
          while($row = mysqli_fetch_array($return_value, 1)){
              echo "<tr><td>".$row['emp_name']."</td><td>".$row['job_category']."</td><td>".$row['job_salary']."</td><td>".$row['job_location']."</td></tr>";
          }
          echo "</table>";
?>

<!-- HTML Code starts here -->
<html>
  <head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <title>View All Jobs Posted</title>
    </head>
    <body class="is-preload">
		<!-- Wrapper -->
			<div  id="wrapper">

				<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="ind.php" class="logo">
                            <!-- </span> <span class="title"><strong style="color:black; font-size:20px">Rise and Shine<em style="color:orange">.</em></strong></span> -->
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
          </div>
     </body>
     <!-- Scripts -->
     <script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
</html>              




