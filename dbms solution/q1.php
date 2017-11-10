<?php
 ob_start();
 session_start();
 include_once 'config.php';

 $error = false;
     $qc=$_SESSION['varname'];
     $w=$_SESSION['wq'];
     $w1=$w;$w1.="_1";
    $s=$_SESSION['user'];
   $query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";
   $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
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
                                            <li><a href="q1.php">Home</a></li>
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
								<h2> quiz questions  <?php echo $qc;?></h2>
								
							</header>
							<p> </p>
                                                           <?php
                $l=0;
        print( $row['qno'].': '.$row['ques'].'<br>'.'<form action="" method="post">
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q1" required autocomplete="off" />
            </div>');
        $w1=$w;$w1.="_2";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";
        $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q2" required autocomplete="off" />
            </div>');
         $w1=$w;$w1.="_3";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q3" required autocomplete="off" />
            </div>');
            $w1=$w;$w1.="_4";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q4" required autocomplete="off" />
            </div>');
        $w1=$w;$w1.="_5";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q5" required autocomplete="off" />
            </div>');
        $w1=$w;$w1.="_6";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q6" required autocomplete="off" />
            </div>');
        $w1=$w;$w1.="_7";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q7" required autocomplete="off" />
            </div>');
        $w1=$w;$w1.="_8";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q8" required autocomplete="off" />
            </div>');
        $w1=$w;$w1.="_9";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q9" required autocomplete="off" />
            </div>');
        $w1=$w;$w1.="_10";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res= mysql_query($query);
   $row=  mysql_fetch_array($res);
        print( $row['qno'].': '.$row['ques'].'<br>'.'
  <br>1.'.$row["op1"].'
  <br>2.'.$row["op2"].'
  <br>3.'.$row["op3"].'
  <br>4.'.$row["op4"].'
       <div class="top-row">
            <div class="field-wrap">
              <label>
                enter option<span class="req">*</span>
              </label>
              <input type="text" name="q10" required autocomplete="off" />
            </div>');
        print('<button type="submit" name="submit" class="button button-block"/>submit</button>
          
          </form>');
        if(isset($_POST['submit'])){
            $value1=$_POST['q1'];
            $value2=$_POST['q2'];
            $value3=$_POST['q3'];$value4=$_POST['q4'];$value5=$_POST['q5'];$value6=$_POST['q6'];$value7=$_POST['q7'];$value8=$_POST['q8'];$value9=$_POST['q9'];
            $value10=$_POST['q10'];
            $w1=$w;$w1.="_1";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' "; $res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value1==$row['cop']){
                $l+=1;  
            }
            $w1=$w;$w1.="_2";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value2==$row['cop']){
                $l+=1;  
            }
            $w1=$w;$w1.="_3";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value3==$row['cop']){
                 $l+=1;
            }
            $w1=$w;$w1.="_4";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value4==$row['cop']){
                 $l+=1;  
            }
            $w1=$w;$w1.="_5";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value5==$row['cop']){
                 $l+=1;  
            }
            $w1=$w;$w1.="_6";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value6==$row['cop']){
              $l+=1;  
            }
            $w1=$w;$w1.="_7";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value7==$row['cop']){
                 $l+=1; 
            }
            $w1=$w;$w1.="_8";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value8==$row['cop']){
                 $l+=1; 
            }
            $w1=$w;$w1.="_9";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value9==$res){
                 $l+=1; 
            }
            $w1=$w;$w1.="_10";$query = "SELECT * FROM questions where qc='$w' and qno='$w1' ";$res=  mysql_query("select cop from questions where qc='$w' and qno='$w1'");$row=  mysql_fetch_array($res);
            if($value10==$row['cop']){
                 $l+=1;  
            }
            
            $_SESSION['s1']=$l;
           unset($l);
           header("Location:res.php");
        }                                                  
			?>
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