<?php
	// require('login.php');
	require('config.php');
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(!isset($_SESSION['is_logged_in'])){
		header('Location: login.php');
	}
	else
	{
		$conn = connection();
		$user_name = $_SESSION['user_name'];
		$employer = $_SESSION['employer'];
		$category = $_SESSION['category'];
		$salary = $_SESSION['salary'];
		$location = $_SESSION['location'];
		// echo $user_name;
		$sql = "INSERT INTO `jobs_applied`(`user_name`, `employer`, `category`, `salary`, `location`) VALUES ('$user_name', '$employer', '$category', '$salary', '$location')";
		$return_value = mysqli_query($conn, $sql);
		if(!$return_value){
			 echo "Something went wrong".mysqli_error($conn);
			 // disconnect($conn);

		}
		else{
			 echo "Application sent successfully";
			 echo "<br><a href = viewAllJobsApplied.php>All Applied Jobs</a>";
			 // disconnect($conn);
			 exit();
		}
		header('Location: index.php');
}
}

?>
<html>
	<head>
		<title>Rise and Shine</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="ind.php" class="logo">
									<span class="fa fa-briefcase"></span> <span class="title">Rise and Shine</span>
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
					<li><a href="index.htmind.php" class="active">Home</a></li>
					<li><a href=login.php>Login as Job Seeker</a></li>
					<li><a href=register.php>Register as Job Seeker</a></li>
					<li><a href=login_emp.php>Login as Job Employer</a></li>
					<li><a href=register_emp.php>Register as Job Employer</a></li>
					<li><a href="jobs.html">Find Jobs</a></li>
					<li><a href="post_jobs.php">Post Jobs</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
				</ul>
			</nav>				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Gurgaon Construction<span class="pull-right"></span></h1>
							
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-7">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
										  <ol class="carousel-indicators">
										    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
										    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
										  </ol>
										  <div class="carousel-inner">
										    <div class="carousel-item active">
										      <img class="d-block w-100" src="images/gurgaon.jpg" alt="First slide">
										    </div>
										    <div class="carousel-item">
										      <img class="d-block w-100" src="images/constructor1.jpg" alt="Second slide">
										    </div>
										    <div class="carousel-item">
										      <img class="d-block w-100" src="images/constructor2.jpg" alt="Third slide">
										    </div>
										    <div class="carousel-item">
										      <img class="d-block w-100" src="images/constructor4.jpg" alt="Fourth slide">
										    </div>
										    <div class="carousel-item">
										      <img class="d-block w-100" src="images/constructor5.jpg" alt="Fifth slide">
										    </div>
										  </div>
										  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
										    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
										    <span class="sr-only">Previous</span>
										  </a>
										  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
										    <span class="carousel-control-next-icon" aria-hidden="true"></span>
										    <span class="sr-only">Next</span>
										  </a>
										</div>
									</div>

									<div class="col-lg-5">
										<h3>Short Description</h3>

										<p>Employer - Gurgaon Construction<br>Category - Construction Worker<br>Salary - Rs 30,000/month<br>Location - Gurgaon</p>
										<?php 
											$_SESSION['employer'] = "Gurgaon Construction";
											$_SESSION['category'] = " Construction Worker";
											$_SESSION['salary'] = "Rs 30,000/month";
											$_SESSION['location'] = "Gurgaon";
										?>
										<form method="post" action="">
										<!-- <a href="#" class="button primary">Apply for this job -->
										<input type="submit" class = "button primary" value="Apply for this job">
										<!-- <input type="submit"/>
										</a> -->
										</form>
									</div>
								</div>
							</div>

							<br>
							<br>
							
							<div class="container-fluid">
								<br>
								<br>

								<div class="row">
									<div class="col-md-3">
										<h3>Contact Details</h3>

										<ul class="alt">
											<li><span class="fa fa-user"></span> John Smith</li>
											<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
											<li><span class="fa fa-mobile-phone"></span> +1 333 4040 5566 </li>
											<li><span class="fa fa-envelope-o"></span> <a href="#">john@carsales.com</a></li>
											<li><a href="http://www.cannonguards.com/">http://www.cannonguards.com/</a></li>

										</ul>
									</div>

									<div class="col-md-9">
										<h3>Full Description</h3>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae consectetur mollitia recusandae vel fugiat, nihil esse commodi culpa! Sunt dolores 
										animi ipsa. Minima odio nulla ipsa eligendi veritatis, velit suscipit!</p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi soluta quo iste qui explicabo ducimus doloribus possimus, hic natus illo perspiciatis. Obcaecati at, error reiciendis corrupti quae alias officia molestiae.</p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo corrupti mollitia necessitatibus omnis nisi molestiae eligendi vero pariatur hic odio, totam reiciendis sed ducimus officia sequi, veniam tempore deleniti ea fugit rerum deserunt et est! Molestias enim facilis delectus. Est doloremque itaque, accusantium voluptas.</p>
									</div>
								</div>

								<h3>About Company</h3>
										
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae consectetur mollitia recusandae vel fugiat, nihil esse commodi culpa! Sunt dolores 
								animi ipsa. Minima odio nulla ipsa eligendi veritatis, velit suscipit!</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi soluta quo iste qui explicabo ducimus doloribus possimus, hic natus illo perspiciatis. Obcaecati at, error reiciendis corrupti quae alias officia molestiae.</p>
							</div>
						</div>
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