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
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
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
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">პროექტები</a>
                            <ul class="dropdown-menu">
                                <li><a href="project1.php">პროექტი 1</a></li>
                                <li><a href="project2.php">პროექტი 2</a></li>
                            </ul>
                        </li>
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
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                        <div class="alert alert-success" id="faq">
                            <li onclick="question1()">პირველი კითხვა</li>
                            <p id="question1" style="display:none; ">პირველი კითხვის პასუხი, პირველი კითხვის პასუხი, პირველი კითხვის პასუხი, პირველი კითხვის პასუხი, პირველი კითხვის პასუხი, პირველი კითხვის პასუხი, პირველი კითხვის პასუხი, პირველი კითხვის პასუხი, პირველი კითხვის პასუხი</p>
                        </div>
                        <div class="alert alert-success" id="faq">
                            <li onclick="question2()">მეორე კითხვა</li>
                            <p id="question2" style="display:none; ">მეორე კითხვის პასუხი</p>
                        </div>
                        <div class="alert alert-success" id="faq">
                            <li onclick="question3()">მესამე კითხვა</li>
                            <p id="question3" style="display:none; ">მესამე კითხვის პასუხი</p>
                        </div>
                        <div class="alert alert-success" id="faq">
                            <li onclick="question4()">მეოთხე კითხვა</li>
                            <p id="question4" style="display:none; ">მეოთხე კითხვის პასუხი</p>
                        </div>
                        <div class="alert alert-success" id="faq">
                            <li onclick="question5()">მეხუთე კითხვა</li>
                            <p id="question5" style="display:none; ">მეხუთე კითხვის პასუხი</p>
                        </div>
                </div> 
                <div class="col-md-2"></div>
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->


     <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="https://www.facebook.com/BackOrForth" class="footer-text">Bero </a> &<a href="https://www.facebook.com/a.bodokia" class="footer-text"> Anano</a>. ყველა უფლება დაცულია.

                </div>
                <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
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