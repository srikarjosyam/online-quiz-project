<?php
 ob_start();
 session_start();
 include_once 'config.php';

 $error = false;

 if ( isset($_POST['submit']) ) {
    $op1=$_POST['op1'];
    $op2=$_POST['op2'];
    $op3=$_POST['op3'];
    $op4=$_POST['op4'];
    $cop=$_POST['cop'];
    $ques=$_POST['ques'];
     $qc=$_SESSION['varname'];
    $qno=$qc;
    $qno.="_";
     $qno.=$_POST['qno'];
    
   $query = "INSERT INTO questions(qc,op1,op2,op3,op4,cop,qno,ques) VALUES('$qc','$op1','$op2','$op3','$op4','$cop','$qno','$ques')";
   $res = mysql_query($query);
    if ($res) {
    $errTyp = "success";
     if($qno==10)
   {
   
       $msg="quiz created successfully";
       echo $msg;
       header("Location: home.php");
       unset($op1);
    unset($op2);
    unset($op3);
    unset($op4);
    unset($cop);
    unset($ques);
    unset($qno);
       
   }
    $errMSG = "Successfully question is entered";
    echo $errMSG;
    unset($op1);
    unset($op2);
    unset($op3);
    unset($op4);
    unset($cop);
    unset($ques);
    unset($qno);
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
						<li><a href="questions.php">Home</a></li>
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
								<h2> quiz creation of <?php echo$qc;?></h2>
								
							</header>
							<p> </p>
                                                        <div class="container" style="position:relative"> 
                               <div class="tab-content">
        <div id="signup">                               
				 <form action="questions.php" method="post">
                                     <div class="top-row">
                                          <div class="field-wrap">
              <label>
                enter question number<span class="req">*</span>
              </label>
              <input type="text" name="qno" required autocomplete="off" />
            </div>  
            <div class="field-wrap">
              <label>
                enter question<span class="req">*</span>
              </label>
              <input type="text" name="ques" required autocomplete="off" />
            </div>
             <div class="field-wrap">
              <label>
                enter option 1<span class="req">*</span>
              </label>
              <input type="text" name="op1" required autocomplete="off" />
            </div>                          
             <div class="field-wrap">
              <label>
                enter option2<span class="req">*</span>
              </label>
              <input type="text" name="op2" required autocomplete="off" />
            </div> 
             <div class="field-wrap">
              <label>
                enter option3<span class="req">*</span>
              </label>
              <input type="text" name="op3" required autocomplete="off" />
            </div>
              <div class="field-wrap">
              <label>
                enter option4<span class="req">*</span>
              </label>
              <input type="text" name="op4" required autocomplete="off" />
            </div>
              <div class="field-wrap">
              <label>
                enter correct option<span class="req">*</span>
              </label>
              <input type="text" name="cop" required autocomplete="off" />
            </div>                           
          </div>
                  <button type="submit" name="submit" class="button button-block"/>next</button>
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