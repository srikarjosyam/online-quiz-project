<?php
 ob_start();
 session_start();
 require_once 'config.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: right-sidebar.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM student WHERE semail=".$_SESSION['user']);
 if($res)
 $userRow=mysql_fetch_array(mysql_query("SELECT * FROM student WHERE semail=".$_SESSION['user']));
?>
<!DOCTYPE HTML>
<html>
	<head>
            <title>WELCOME Student</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="home.php">Home</a></li>
                                               <li> <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<header>
								<h2>QUIZ SUBJECTS</h2>
							</header>
							<div class="row">
								<section class="6u">
									<ul class="default">
                                                                            <li><a href="osquiz.php">OPERATING SYSTEMS</a></li>
                                                                            <li><a href="dbmsquiz.php">DATABASE MANAGEMENT</a></li>
                                                                            <li><a href="coaquiz.php">COMPUTER ORGANISATION AND ARCHITECTURE</a></li>
                                                                            <li><a href="digiquiz.php">DIGITAL SYSTEMS</a></li>
                                                                            <li><a href="dsquiz.php">DATA STRUCTURES</a></li>
									</ul>
								</section>
								
							</div>
						</section>
					</div>
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>WELCOME <?php                echo $_SESSION['name']; ?></h2>
								
							</header>
							<p>here you can write quizzes for the following subjects listed at the left side.Each quiz has 10 questions.you need to tick the correct option and submit the answers for evaluation.There is no negative marking.</p>
								</section>
					</div>

				</div>
			</div>
		</div>
	<!-- /Main -->

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;You can't have a better tomorrow if you're still thinking about yesterday.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">CONTACT US AT</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		


	</body>
</html>
<?php ob_end_flush(); ?>