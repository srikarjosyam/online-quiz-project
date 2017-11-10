<!DOCTYPE HTML>
<?php
 ob_start();
 session_start();
 require_once 'config.php';
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home1.php");
  exit;
 }
 
 $error = false;
 
 if( isset($_POST['login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
   echo $emailError;
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  
   echo $emailError;
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  echo $passError;
   
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password =$pass; // password hashing using SHA256
  
   $res=mysql_query("SELECT sname, spass,semail FROM student WHERE semail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['spass']==$password ) {
     $_SESSION['user'] = $row['semail'];
     $_SESSION['name'] =$row['sname'];
    header("Location: home1.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
    echo $errMSG;
   }
    
  }
  
 }
?>
<html>
	<head>
		<title>Student Login</title>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="left-sidebar.php">Teacher Login</a></li>
						<li class="active"><a href="right-sidebar.php">Student Login</a></li>
					</ul>
				</nav>
			</div>
			<div class="container" style="position:relative"> 
				<div class="login">
                                    <form action="" method="post">
				<h1><input type="text" placeholder="email address" name="email"><br>
				<input type="password" placeholder="password" name="pass"><br>
                                <button type="submit" name="login" value="Login">login</button></h1>
                                    </form>
		</div>
			</div>
		</div>
	<!-- Header --> 

	<!-- Main -->
		
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
