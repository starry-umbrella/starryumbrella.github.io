<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
 
<?php
	include("config.php");//引入数据库连接文件
//$id = isset($_GET['id']);
	$id = $_GET['id'];
//if(isset($id))
	
//$sql = "select * from msgboard where article_id = ".$_GET['id'];
	$sql = "select * from articles where id = '$id'";
	$result = mysql_query($sql,$con);
	$row = mysql_fetch_array($result);

	$sql1 = "select * from articles";
	$result1 = mysql_query($sql1,$con);
	
	
//$row =  mysql_fetch_array($result1);
//$sql2 = "select * from friends";
//$result2 = mysql_query($sql2,$con);
//$tagsSql = "select tag from articles";
//$tagsRes = mysql_query($tagsSql,$con);
?>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $row['title'] ?></title>
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
			        		<li><a href="Login.html">Login</a></li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
                        <li class="logo-wrapper"><a href="../index.html"><img src="img/tx1.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li class="active">
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="Consumers.html">Consumers</a>
						</li>
						<li class="has-submenu">
							<a href="#">Pages +</a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner"> 
									
									<div>
										<h4>Homepage</h4>
										<ul>
											<li><a href="index.html">Home</a></li>
										</ul>
										<h4>News</h4>
										<ul>
											<li><a href="Latest & Featured News.html">Latest & Featured News</a></li>
										</ul>
										<h4> Our Team & Open Vacancies</h4>
										<ul>
											<li><a href="The Way We Made it.html">The Way We Made it</a></li>
											<li><a href="Vacancies.html">Vacancies</a></li>
										</ul>
									</div>
									
									<div>
										<h4>Our products</h4>
										<ul>
											<li><a href="Product1 Details.html">Product1 Details</a></li>
											<li><a href="Product2 Details.html">Product2 Details</a></li>
											<li><a href="Product3 Details.html">Product3 Details</a></li>
											<li><a href="Product4 Details.html">Product4 Details</a></li>
										</ul>
										<h4>General Pages</h4>
										<ul>
											<li><a href="Login.html">Login</a></li>
											<li><a href="Password Reset.html">Password Reset</a></li>
		            					<li><a href="Register.html">Register</a></li>	
										</ul>
									</div>

									<div>
										<h4>eShop</h4>
										<ul>
											<li><a href="Shopping Cart.html">Shopping Cart</a></li>
										</ul>
										<h4>Blog</h4>
										<ul>
											<li><a href="Our Blog.html">Our Blog</a></li>
											<li><a href="Inspiration.html">Inspiration</a></li>
											<li><a href="Innovation.html">Innovation</a></li>
											<li><a href="Business Prospects.html">Business Prospects</a></li>
											<li><a href="Our Plan.html">Our Plan</a></li>
										</ul>
									</div>

								</div><!-- /mainmenu-submenu-inner -->
							</div><!-- /mainmenu-submenu -->
							</li>
						</li>
						<li>
							<a href="Contact Us.html">Contact Us</a>
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
						<h1>Blog Post</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
                                
								<h3><?php echo $row['title'] ?></h3>
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i><?php echo $row['date'] ?><a href="#" title="Show Comments"></a>
							</div>
							<div class="single-post-image">
								<img src="<?php echo $row['url'] ?>" alt="Post Title">
							</div>
							<div class="single-post-content">
								<h3><?php echo $row['title'] ?></h3>
								<p>
									<?php echo $row['content'] ?>
                                </p>
							</div>
                           
						</div>
					</div>
					<!-- End Blog Post -->
					<!-- Sidebar -->
					<div class="col-sm-4 blog-sidebar">
						<h4>Search our Blog</h4>
						<form>
							<div class="input-group">
								<input class="form-control input-md" id="appendedInputButtons" type="text">
								<span class="input-group-btn">
									<button class="btn btn-md" type="button">Search</button>
								</span>
							</div>
						</form>
						<h4>Recent Posts</h4>
						<ul class="recent-posts">
							<li><a href="Inspiration.html">Inspiration</a></li>
							<li><a href="Innovation.html">Innovation</a></li>
							<li><a href="Business Prospects.html">Business Prospects</a></li>
							<li><a href="Our Plan.html">Our Plan</a></li>
                            <?php
        						while($row1 = mysql_fetch_array($result1))
									{
                                    ?>
                            <li><a href="article.php?id=<?php	echo $row1['id'] ?> "><?php	echo $row1['title'] ?></a></li>
                            <?php
                                }
                                      ?>
						</ul>
					</div>
					<!-- End Sidebar -->
				</div>
			</div>
	    </div>

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