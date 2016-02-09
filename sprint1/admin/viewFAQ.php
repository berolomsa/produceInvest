<?php 
	session_start();
	if ($_SESSION["loggedIn"] == false) {
		session_destroy();
		header("location:login.html");
	} 

	ob_start();
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="produce_invest"; // Database name
	$tbl_name="faq"; // Table name

	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");

	$sql="SELECT * FROM $tbl_name";
	$result = mysql_query($sql);
?>
<!DOCTYPE HTML>

<html>
<head>
<title>AdminPanel | ProduceInvest.Ge</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<link rel="shortcut icon" href="images/faicon.ico" type="image/x-icon" />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">

						<li><a href="viewFlats.php"><i class="lnr lnr-apartment"></i> <span>ბინები</span></a></li>     
						<li class="menu-list">
							<a href="#"><i class="lnr lnr-picture"></i>
								<span>გალერეა</span></a>
								<ul class="sub-menu-list">
									<li><a href="viewGallery.php">დათვალიერება</a> </li>
									<li><a href="addImage.php">დამატება</a></li>
								</ul>
						</li>
						<li class="menu-list act">
							<a href="#"><i class="lnr lnr-question-circle"></i>
								<span>FAQ</span></a>
								<ul class="sub-menu-list">
									<li><a href="viewFAQ.php">დათვალიერება</a> </li>
									<li><a href="addFAQ.php">დამატება</a></li>
								</ul>
						</li>
						<!-- <li><a href="forms.html"><i class="lnr lnr-spell-check"></i> <span>Forms</span></a></li>
						<li><a href="tables.html"><i class="lnr lnr-menu"></i> <span>Tables</span></a></li>              
						<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
							<ul class="sub-menu-list">
								<li><a href="inbox.html">Inbox</a> </li>
								<li><a href="compose-mail.html">Compose Mail</a></li>
							</ul>
						</li>      
						<li class="menu-list"><a href="#"><i class="lnr lnr-indent-increase"></i> <span>Menu Levels</span></a>  
							<ul class="sub-menu-list">
								<li><a href="charts.html">Basic Charts</a> </li>
							</ul>
						</li>
						<li><a href="codes.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
						<li><a href="media.html"><i class="lnr lnr-select"></i> <span>Media Css</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Pages</span></a> 
							<ul class="sub-menu-list">
								<li><a href="sign-in.html">Sign In</a> </li>
								<li><a href="sign-up.html">Sign Up</a></li>
								<li><a href="blank_page.html">Blank Page</a></li>
							</ul>
						</li> -->
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="logout.php" >
									<div class="profile_img">	
										<span style="background:url(images/avatar.png) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Administrator<span>გასვლა</span></p>
										 </div>
										<div class="clearfix"></div>	
									</div>	
								</a>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		        	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
		<!-- //header-ends -->
		<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">კითხვა-პასუხის დათვალიერება</h3>

					<?php while($row = mysql_fetch_assoc($result)){

					?>
					<div class="faq-row col-sm-12" > 
						<div class="col-sm-2" style="float:right">
							<form action="deleteFAQ.php" method="post">
								<?php
								    echo '<input name="faqId" class="faq-hidden" type="hidden" value="' . htmlspecialchars($row['id']) . '" />'."\n";
								    ?>
								 <button class="btn-delete">
							      <span class="lnr lnr-cross"></span>
							    </button>
							</form>
						</div>
						<div class="wrapper-faq col-sm-12">
							<div class="faq-question col-sm-12">
								<i class="lnr lnr-question-circle"></i> <span> <?php echo $row['question']?> </span>
							</div>
							<div class="faq-answer col-sm-12">
								<i class="lnr lnr-checkmark-circle"></i> <span> <?php echo $row['answer']?></span>
							</div>
						</div>
					</div>
					<?php }?>

				</div>
			</div>
		</div>
        <!--footer section start-->
			<footer>
			   <p> 
                    &copy; 2015 <a target="_blank" href="https://www.facebook.com/BackOrForth" class="footer-text">Bero </a> &<a href="https://www.facebook.com/a.bodokia" 
                    class="footer-text"> Anano</a>. ყველა უფლება დაცულია.
			   </p>
			</footer>
        <!--footer section end-->

      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>