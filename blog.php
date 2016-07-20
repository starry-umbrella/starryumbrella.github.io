<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php 
include("config.php"); 
$sql = "select * from msgboard order by date DESC,id DESC"; 
$result = mysql_query($sql,$con);
$sql1= "select * from articles order by id DESC";
$result1 = mysql_query($sql1,$con);
//$sql2 = "select * from friends";
//$result2 = mysql_query($sql2,$con);
//$tagsSql = "select tag from articles";
//$tagsRes = mysql_query($tagsSql,$con);
//$perNumber=5;  
//$page=$_GET['page'];  
//$count=mysql_query("select count(*) from articles");  
//$rs=mysql_fetch_array($count); 
//$totalNumber=$rs[0];
//$totalPage=ceil($totalNumber/$perNumber);  
//if (!isset($page)) {
// $page=1;
//}  
//$startCount=($page-1)*$perNumber;  
//$result3=mysql_query("select * from articles order by id DESC limit $startCount,$perNumber");
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Our Blog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/leaflet.ie.css" />
        <![endif]-->
        <link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
            <div class="container">
                <div class="menuextras">
                    <div class="extras">
                        <ul>
                            <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a></li>
                            <li>
                                <div class="dropdown choose-country">
                                    <a class="#" data-toggle="dropdown" href="#"><img src="img/flags/cn.png" alt="China"> China</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li role="menuitem"><a href="#"><img src="img/flags/gb.png" alt="Great Britain"> UK</a></li>
                                        <li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
                                        <li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
                                        <li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="page-login.html">Login</a></li>
                        </ul>
                    </div>
                </div>
                <nav id="mainmenu" class="mainmenu">
                    <ul>
                        <li class="logo-wrapper"><a href="index.html"><img src="img/tx1.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Products</a>
                            <div class="mainmenu-submenu">
                                <div class="mainmenu-submenu-inner"> 
                                    
                                    <div>
                                        <ul>
                                            <li><a href="The Way We Made it.html">Technique</a></li>
                                            <li><a href="Product1 Details.html">Product1</a></li>
                                            <li><a href="Product2 Details.html">Product2</a></li>
                                            <li><a href="Product3 Details.html">Product3</a></li>
                                            <li><a href="Product4 Details.html">Product4</a></li>
                                        </ul>
                                    </div>

                                </div><!-- /mainmenu-submenu-inner -->
                            </div><!-- /mainmenu-submenu -->
                            </li>
                        </li>
                        <li>
                            <a href="Consumers.html">Consumers</a>
                        </li>
                        <li class="active">
                            <a href="Our%20Blog.html">Blog</a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">About us</a>
                            <div class="mainmenu-submenu">
                                <div class="mainmenu-submenu-inner"> 
                                    
                                    <div>
                                        <ul>
                                            <li><a href="About.html">Our·Team</a></li>
                                            <li><a href="Latest & Featured News.html">Latest·News</a></li>
                                            <li><a href="Shopping Cart.html">eShop</a></li>
                                            <li><a href="Contact Us.html">Contact·Us</a></li>
                                        </ul>
                                    </div>

                                </div><!-- /mainmenu-submenu-inner -->
                            </div><!-- /mainmenu-submenu -->
                            </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Our Blog</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Posts List -->
        <div class="section blog-posts-wrapper">
            <div class="container">
                <div class="row">

                    <!-- Post -->
                    <?php
						while ($row=mysql_fetch_array($result1)) {
					?>
                    <div class="col-md-6 col-sm-12">
                        <div class="blog-post">
                            <!-- Post Info -->
                            <div class="post-info">
                                <div class="post-date">
                                    <div class="date"><?php	echo $row['date'] ?></div>
                                </div>
                                <div class="post-comments-count">
                                    <a href="Our Blog.html" title="Show Comments"><i class="glyphicon glyphicon-comment icon-white"></i>3</a>
                                </div>
                            </div>
                            <!-- End Post Info -->
                            <!-- Post Image -->
                            <a href="Inspiration.html"><img src="<?php echo $row['url'] ?>" class="post-image" alt="Post Title"></a>
                            <!-- End Post Image -->
                            <!-- Post Title & Summary -->
                            <div class="post-title">
                                <h3><a href="Inspiration.html"><?php	echo $row['title'] ?></a></h3>
                            </div>
                            <div class="post-summary">
                                <p><?php	echo $row['content'] ?></div>
                            <!-- End Post Title & Summary -->
                            <div class="post-more">
                                <a href="article.php?id=<?php	echo $row['id'] ?> " class="btn btn-small">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
					?>
                    <!-- End Post -->                  
                    
        <!-- End Posts List -->

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright">&copy; 2016 Starry Umbrella. All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>