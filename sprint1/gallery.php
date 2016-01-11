<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="ნახვაport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>გალერეა | Produce Invest</title>
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
                        <li class="active"><a href="gallery.php">გალერეა</a></li>
                        <li><a href="blog.php">FAQ</a></li> 
                        <li><a href="contact-us.php">კონტაქტი</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    <section id="portfolio">
        <div class="container">

        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">ყველა</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".current">მიმდინარე</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".done">დასრულებული</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <?php
                        $current    = 'images/portfolio/current/';
                        $finished = 'images/portfolio/finished/';
                        $currentImages = scandir($current);
                        $finishedImages = scandir($finished);
                        unset($currentImages[0]);
                        unset($finishedImages[0]);
                        unset($currentImages[1]);
                        unset($finishedImages[1]);
                    ?>

                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/current/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3 style="color:white;">სათაური </h3>
                                    <p>ტექსტი სურათის შესახებ</p>
                                    <a class="preview" href="images/portfolio/finished/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> ნახვა</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla current col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/current/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3 style="color:white;">სათაური </h3>
                                    <p>ტექსტი სურათის შესახებ</p>
                                    <a class="preview" href="images/portfolio/finished/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> ნახვა</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item current done col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/current/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3 style="color:white;">სათაური </h3>
                                    <p>ტექსტი სურათის შესახებ</p>
                                    <a class="preview" href="images/portfolio/finished/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> ნახვა</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla done apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/current/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3 style="color:white;">სათაური </h3>
                                    <p>ტექსტი სურათის შესახებ</p>
                                    <a class="preview" href="images/portfolio/finished/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> ნახვა</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item joomla html current col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/current/item5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3 style="color:white;">სათაური </h3>
                                    <p>ტექსტი სურათის შესახებ</p>
                                    <a class="preview" href="images/portfolio/finished/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> ნახვა</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item done html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/current/item6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3 style="color:white;">სათაური </h3>
                                    <p>ტექსტი სურათის შესახებ</p>
                                    <a class="preview" href="images/portfolio/finished/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> ნახვა</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item done html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/current/item7.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3 style="color:white;">სათაური </h3>
                                    <p>ტექსტი სურათის შესახებ</p>
                                    <a class="preview" href="images/portfolio/finished/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> ნახვა</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html current col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/current/item8.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3 style="color:white;">სათაური </h3>
                                    <p>ტექსტი სურათის შესახებ</p>
                                    <a class="preview" href="images/portfolio/finished/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> ნახვა</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
    

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
