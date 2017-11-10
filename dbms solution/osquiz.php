<?php
 ob_start();
 session_start();
 include_once 'config.php';

 $error = false;
     $qc=$_SESSION['varname'];
  
   $query = "SELECT qname,qc FROM subject where qname='os'";
   $res = mysql_query($query);
     if(isset($_POST['submit']))
 {
     $wq=$_POST['wq'];
     $_SESSION['wq']=$wq;
     header("Location: q1.php");
 }
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
						<li><a href="osquiz.php">Home</a></li>
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
					
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2> quiz selection  <?php echo$qc;?></h2>
								
							</header>
							<p> </p>
                                                            <?php
                                                            if($res!=""){
                                                            if (mysql_num_rows($res) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($res)) {
        print( 'subject:'.$row["qname"].' - code: '.'<a href="q1.php">'.$row["qc"].'</a>'.'<br>' );      }
} 
}else {
    echo "0 results";
}
?>
                                                        <div class="container" style="position:relative"> 
                               <div class="tab-content">
        <div id="signup">                               
				 <form action="" method="post">
                                     <div class="top-row">
            <div class="field-wrap">
              <label>
                enter subject code of quiz you want to write from above list<span class="req">*</span>
              </label>
              <input type="text" name="wq" required autocomplete="off" />
            </div>
          </div>
                  <button type="submit" name="submit" class="button button-block"/>start</button>
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