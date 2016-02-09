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
	$tbl_name="flat"; // Table name

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
						<li class="active"><a href="viewFlats.php"><i class="lnr lnr-apartment"></i> <span>ბინები</span></a></li>     
						<li class="menu-list">
							<a href="#"><i class="lnr lnr-picture"></i>
								<span>გალერეა</span></a>
								<ul class="sub-menu-list">
									<li><a href="viewGallery.php">დათვალიერება</a> </li>
									<li><a href="addImage.php">დამატება</a></li>
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="lnr lnr-question-circle"></i>
								<span>FAQ</span></a>
								<ul class="sub-menu-list">
									<li><a href="viewFAQ.php">დათვალიერება</a> </li>
									<li><a href="addFAQ.php">დამატება</a></li>
								</ul>
						</li>
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
					<h3 class="blank1">ბინების დათვალიერება</h3>
					 <div class="xs tabls">
						<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>#</th>
											<th>ბლოკი</th>
											<th>სართული</th>
											<th>ნომერი</th>
											<th>სტატუსი</th>
											<th style="width:20px"></th>
										</tr>
									</thead>
									<tbody>
										<?php while($row = mysql_fetch_assoc($result)){ ?>
										<tr>
											<td><?php echo $row['id'] ?></td>
											<td><?php echo $row['blocktype'] ?>-ბლოკი</td>
											<td><?php echo $row['floor'] ?></td>
											<td><?php echo $row['flatnum'] ?></td>
											<td><?php 
											if ($row['flatstatus'] == 'FREE' ) {
												echo 'თავისუფალი';	
											}
											if ($row['flatstatus'] == 'BOOKED' ) {
												echo 'დაჯავშნილი';	
											}
											if ($row['flatstatus'] == 'SOLD' ) {
												echo 'გაყიდული';	
											}
											 ?></td>
											<td><img src="images/edit.png"/></td>
										</tr>
										<?php }?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
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