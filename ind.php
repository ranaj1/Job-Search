<?php
	session_start();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Rise and Shine</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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

				<!-- Main -->
					<div id="main">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images/mask.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
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

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Beat Covid, Find your perfect job!</h1>
								<p>We are here to help you. Covid has caused a lot of job losses for blue collar people but you need not to worry, we are providing you a list of ample post covid blue collar jobs.</p>
							</header>

							<br>

							<h2 class="h2">Featured Jobs</h2>

							<!-- Jobs -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
									<img id = 'cons'src="images/constructor2.jpg" alt="" />
									</span>
									<a href="location1.php">
										<h2>Construction Jobs</h2>
										</a>
										
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/textile.jpg" alt="" />
									</span>
									<a href="location1.php">
										<h2>Textile Jobs</h2>
			
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/chef.png" alt="" />
									</span>
									<a href="location1.php">
										<h2>Chef Jobs</h2>
						
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/delivery.jpg" alt="" />
									</span>
									<a href="location1.php">
										<h2>Delivery Jobs</h2>
										
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/painter1.jpg" alt="" />
									</span>
									<a href="location1.php">
										<h2>Painter Jobs</h2>
							
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/plumber.jpg" alt="" />
									</span>
									<a href="location1.php">
										<h2>Plumber Jobs</h2>
									</a>
								</article>
							</section>

							<p class="text-center"><a href="jobs.html">View Jobs &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
							
							<br>

							<h2 class="h2">Testimonials</h2>
							
							<div class="row">
								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

									<p><strong> - John Doe</strong></p>
								</div>

								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

									<p><strong>- John Doe</strong> </p>
								</div>
							</div>

							<p class="text-center"><a href="testimonials.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>
							<h2 class="h2">Informative Blog</h2>
							<section class="tiles">
								<article>
									<span class="image">
										<style>
											*{
												 margin-left: 700px;
											}
										</style>
										<img src="images/bar.gif" alt="" />
									</span>
									<a href="blog.html">
										</a>
										
								</article>
								</section>

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