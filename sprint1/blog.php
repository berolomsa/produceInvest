<?php 
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FAQ | Produce Invest</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/faicon.ico" type="image/x-icon" />
</head><!--/head-->

<body>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +995 599 70 13 33</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/Produce-invest-1635238396725797"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="skype:produce.invest?userinfo"><i class="fa fa-skype"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">მთავარი</a></li>
                        <!-- <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">პროექტები</a>
                            <ul class="dropdown-menu">
                                <li><a href="project1.php">პროექტი 1</a></li>
                                <li><a href="project2.php">პროექტი 2</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">ჩვენ</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.php">ჩვენს შესახებ</a></li>
                                <li><a href="about-us.php#ourTeam">გუნდი</a></li>
                                <li><a href="about-us.php#ourPartners">პარტნიორები</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.php">გალერეა</a></li>
                        <li class="active"><a href="blog.php">FAQ</a></li> 
                        <li><a href="contact-us.php">კონტაქტი</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    <section id="blog" class="container">
        <div class="center">
            <h2>ხშირად დასმული კითხვები</h2>
            <p class="lead"></p>
        </div>

        <div class="blog">
            <div class="container">
                <div class="panel-group" id="accordion">

                    <?php while($row = mysql_fetch_assoc($result)){

                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <?php echo '<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'. $row['id']. '"> ' .$row['question']. '</a>' ?>
                            </h4>
                        </div>
                        <?php echo '<div id="collapse' .$row['id'].'" class="panel-collapse collapse">'?>
                            <div class="panel-body">
                                 <?php echo $row['answer']?>
                            </div>
                        </div>
                    </div>

                    <?php }?>
                </div>
            </div>
        </div>
    </section><!--/#blog-->


     <footer id="footer" class="midnight-blue" style="margin-top:150px">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="https://www.facebook.com/BackOrForth" class="footer-text">Bero </a> &<a href="https://www.facebook.com/a.bodokia" class="footer-text"> Anano</a>. ყველა უფლება დაცულია.

                </div>
                <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/Produce-invest-1635238396725797"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="skype:produce.invest?userinfo"><i class="fa fa-skype"></i></a></li>
                            </ul>
                       </div>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>