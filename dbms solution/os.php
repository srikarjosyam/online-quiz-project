<?php
 ob_start();
 session_start();
 include_once 'config.php';

 $error = false;

 if ( isset($_POST['submit']) ) {
   $e=$_SESSION['user'];
   $qc=$_POST['qc'];
   $query = "INSERT INTO subject(email,qname,qc) VALUES('$e','os','$qc')";
   $res = mysql_query($query);
    if ($res) {
        $_SESSION['varname']=$qc;    
    $errTyp = "success";
    $errMSG = "Successfully created";
    echo $errMSG;
    unset($e);
    header("Location: questions.php");
    }
    else{
        echo 'error try again by changing ur subject code to unique value';
    }
 }
 ?>
<!DOCTYPE HTML>
<html>
	<head>
            <title>WELCOME TEACHER</title>
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
										<li><a href="os.php">OPERATING SYSTEMS</a></li>
										<li><a href="dbms.php">DATABASE MANAGEMENT</a></li>
										<li><a href="coa.php">COMPUTER ORGANISATION AND ARCHITECTURE</a></li>
										<li><a href="digi.php">DIGITAL SYSTEMS</a></li>
										<li><a href="ds.php">DATA STRUCTURES</a></li>
									</ul>
								</section>
								
							</div>
						</section>
					</div>
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2> quiz creation</h2>
								
							</header>
							<p></p>
                                                        <div class="container" style="position:relative"> 
                               <div class="tab-content">
        <div id="signup">                               
				 <form action="" method="post">
                                     <div class="top-row">
            <div class="field-wrap">
              <label>
                enter subject code<span class="req">*</span>
              </label>
              <input type="text" name="qc" required autocomplete="off" />
            </div>
          </div>
                  <button type="submit" name="submit" class="button button-block"/>create</button>
                                 </form>
        </div>
                               </div>
		</div>
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