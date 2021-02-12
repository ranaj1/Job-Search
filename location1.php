<?php
	session_start();
?>
<html>
	<head>
	<style>
    .chart-container {
        margin-left: 50px;
    width: 700px;
    height:400px
    }
        </style>
		<title>Rise and Shine</title>
		<link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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
			<div class="wrapper">
            <h1 style = "text-align: center;">Post Covid Blue Collar Jobs</h1>
            <div class="chart-container">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <script src="style.js"></script>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Search by Location</h1>

							<!-- Jobs -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/noida.jpg" alt="" />
									</span>
									<a href="job-details-construction1.php">
										<h2>Noida</h2>
										
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/gurgaon.jpg" alt="" />
									</span>
									<a href="job-details-construction2.php">
										<h2>Gurgaon</h2>
										
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/delhi6.jpg" alt="" />
									</span>
									<a href="job-details-construction3.php">
										<h2>Delhi</h2>
										
									
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/chandigarh.jpg" alt="" />
									</span>
									<a href="job-details-construction1.php">
										<h2>Chandigarh</h2>
										
										
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/banglore.jpg" alt="" />
									</span>
									<a href="job-details-construction1.php">
										<h2>Banglore</h2>
										
							
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/mumbai.jpg" alt="" />
									</span>
									<a href="job-details-construction1.php">
										<h2>Mumbai</h2>
										
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