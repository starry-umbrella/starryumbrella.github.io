<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<?php 
include("config.php"); 
$login = $_GET['id'];
$sql2 = "select * from users where email='$login'";
$result2 = mysql_query($sql2,$con);
$user = mysql_fetch_array($result2);
$sql = "select * from msgboard order by date DESC,id DESC"; 
$result = mysql_query($sql,$con);
$sql1= "select * from articles order by date DESC";
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

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Starry Umbrella</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<link href="media/css/jquery.fancybox.css" rel="stylesheet" />

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="media/css/blog.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

                <a class="brand" href="../index.html">

				<img src="media/image/tx1.png" alt="Multipurpose Twitter Bootstrap Template"></a>

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="media/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN NOTIFICATION DROPDOWN -->   

					<li class="dropdown" id="header_notification_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-warning-sign"></i>

						<span class="badge">6</span>

						</a>

						<ul class="dropdown-menu extended notification">

							<li>

								<p>You have 14 new notifications</p>

							</li>

							<li>

								<a href="#">

								<span class="label label-success"><i class="icon-plus"></i></span>

								New user registered. 

								<span class="time">Just now</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Server #12 overloaded. 

								<span class="time">15 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-warning"><i class="icon-bell"></i></span>

								Server #2 not respoding.

								<span class="time">22 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-info"><i class="icon-bullhorn"></i></span>

								Application error.

								<span class="time">40 mins</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								Database overloaded 68%. 

								<span class="time">2 hrs</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="label label-important"><i class="icon-bolt"></i></span>

								2 user IP blocked.

								<span class="time">5 hrs</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all notifications <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END NOTIFICATION DROPDOWN -->

					<!-- BEGIN INBOX DROPDOWN -->

					<li class="dropdown" id="header_inbox_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-envelope"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended inbox">

							<li>

								<p>You have 12 new messages</p>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="media/image/avatar2.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Lisa Wong</span>

								<span class="time">Just Now</span>

								</span>

								<span class="message">

								Vivamus sed auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="media/image/avatar3.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Richard Doe</span>

								<span class="time">16 mins</span>

								</span>

								<span class="message">

								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li>

								<a href="inbox.html?a=view">

								<span class="photo"><img src="media/image/avatar1.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Bob Nilson</span>

								<span class="time">2 hrs</span>

								</span>

								<span class="message">

								Vivamus sed nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>  

								</a>

							</li>

							<li class="external">

								<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END INBOX DROPDOWN -->

					<!-- BEGIN TODO DROPDOWN -->

					<li class="dropdown" id="header_task_bar">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<i class="icon-tasks"></i>

						<span class="badge">5</span>

						</a>

						<ul class="dropdown-menu extended tasks">

							<li>

								<p>You have 12 pending tasks</p>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">New release v1.2</span>

								<span class="percent">30%</span>

								</span>

								<span class="progress progress-success ">

								<span style="width: 30%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Application deployment</span>

								<span class="percent">65%</span>

								</span>

								<span class="progress progress-danger progress-striped active">

								<span style="width: 65%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile app release</span>

								<span class="percent">98%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 98%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Database migration</span>

								<span class="percent">10%</span>

								</span>

								<span class="progress progress-warning progress-striped">

								<span style="width: 10%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Web server upgrade</span>

								<span class="percent">58%</span>

								</span>

								<span class="progress progress-info">

								<span style="width: 58%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li>

								<a href="#">

								<span class="task">

								<span class="desc">Mobile development</span>

								<span class="percent">85%</span>

								</span>

								<span class="progress progress-success">

								<span style="width: 85%;" class="bar"></span>

								</span>

								</a>

							</li>

							<li class="external">

								<a href="#">See all tasks <i class="m-icon-swapright"></i></a>

							</li>

						</ul>

					</li>

					<!-- END TODO DROPDOWN -->

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="media/image/admin.png" />

						<span class="username"><?php echo $user[name]; ?></span>

						<i class="icon-angle-down"></i>

						</a>

						<ul class="dropdown-menu">


							<li class="divider"></li>

							<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>

                            <li><a href="../Login.html"><i class="icon-key"></i> Log Out</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->   

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

					<form class="sidebar-search" role="form" action="search_test.php" method="post">

						<div class="input-box">

							<!--<a href="javascript:;" class="remove"></a>-->

							<input type="text" name="backend_search" placeholder="Search..." />

							<input type="button" class="submit" value=" " />

						</div>

					</form>

					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>

				<li class="start ">

					<a href="backend_blog.php">

					<i class="icon-home"></i> 

					<span class="title">Home</span>

					</a>

				</li>

				
				<li class="last ">

					<a href="page_blog_write.html">

					<i class="icon-file-text"></i> 

					<span class="title">Write</span>

					</a>

				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>portlet Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER --> 

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							Blog <small>blog listing and post samples</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="backend_blog.php">Home</a> 

								<i class="icon-angle-right"></i>

							</li>

							

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12 blog-page">

						<div class="row-fluid">

							<div class="span9 article-block">

								<h1>Latest Blog</h1>

                                
                                <?php
									while ($row=mysql_fetch_array($result1)) {
								?>
								
                                
                                <div class="row-fluid">

									<div class="span4 blog-img blog-tag-data">

										<!--<img src="media/image/e.jpg" alt="">-->
                                        <img src="<?php	echo $row['url'] ?>" alt="">

										<ul class="unstyled inline">

											<li><i class="icon-calendar"></i> <a href="#"><?php	echo $row['date'] ?></a></li>

											<li><i class="icon-comments"></i> <a href="#">11  Comments</a></li>

										</ul>

										<ul class="unstyled inline blog-tags">

											<li>

												<i class="icon-tags"></i> 

												<a href="#">Technology</a> 

												<a href="#">Education</a>

												<a href="#">Internet</a>

											</li>

										</ul>

									</div>

									<div class="span8 blog-article">

										<h2><a href="backend_article.php?id=<?php	echo $row['id'] ?>"><?php	echo $row['title'] ?></a></h2>

										<p><?php	echo $row['content'] ?></p>

										<a class="btn blue" href="backend_article.php?id=<?php	echo $row['id'] ?>">

										Read more 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>
                                        
                                                                          
										<a class="btn blue" href= "delete.php?id=<?php	echo $row['id'] ?>" >

										Delete 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>
                                        
                                        <a class="btn blue" href= "backend_blog_modify.php?id=<?php  echo $row['id'] ?>" >

										Modify

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

									</div>

								</div>

								<hr>
                                
                                <?php 
                                    }
                                    ?>                                   
                                
                                
                                <div class="row-fluid">

									<div class="span4 blog-img blog-tag-data">

										<img src="media/image/e.jpg" alt="">

										<ul class="unstyled inline">

											<li><i class="icon-calendar"></i> <a href="#">JUL 11, 2016</a></li>

											<li><i class="icon-comments"></i> <a href="#">11  Comments</a></li>

										</ul>

										<ul class="unstyled inline blog-tags">

											<li>

												<i class="icon-tags"></i> 

												<a href="#">Technology</a> 

												<a href="#">Education</a>

												<a href="#">Internet</a>

											</li>

										</ul>

									</div>

									<div class="span8 blog-article">

										<h2><a href="page_blog_item_plan.html">Our Plan</a></h2>

										<p>On the basis of the existing functions, we plan to increase more functions of the umbrella, and classify different functions in order to meet the needs of different consumer groups and to expand the scope of the target users.</p>

										<a class="btn blue" href="page_blog_item_plan.html">

										Read more 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

										<a class="btn blue" href="page_blog_item_plan.html">

										Delete 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

									</div>

								</div>

								<hr>

								<div class="row-fluid">

									<div class="span4 blog-img blog-tag-data">

										<img src="media/image/d.jpg" alt="">

										<ul class="unstyled inline">

											<li><i class="icon-calendar"></i> <a href="#">JUL 10, 2016</a></li>

											<li><i class="icon-comments"></i> <a href="#">11 Comments</a></li>

										</ul>

										<ul class="unstyled inline blog-tags">

											<li>

												<i class="icon-tags"></i> 

												<a href="#">Technology</a> 

												<a href="#">Education</a>

												<a href="#">Internet</a>

											</li>

										</ul>

									</div>

									<div class="span8 blog-article">

										<h2><a href="page_blog_item_prospects.html">Business Prospects</a></h2>

										<p>To provide new ideas for the umbrella manufacturing industry, provide business opportunities for the corresponding parts manufacturers and by the new Internet advertising model and sales model, it is easy to attract Consumers.</p>

										<a class="btn blue" href="page_blog_item_prospects.html">

										Read more 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

										<a class="btn blue" href="page_blog_item_prospects.html">

										Delete 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

									</div>

								</div>

								<hr>

								<div class="row-fluid">

									<div class="span4 blog-img blog-tag-data">

										<img src="media/image/c.jpg" alt="">

										<ul class="unstyled inline">

											<li><i class="icon-calendar"></i> <a href="#">JUL 09, 2016</a></li>

											<li><i class="icon-comments"></i> <a href="#">2 Comments</a></li>

										</ul>

										<ul class="unstyled inline blog-tags">

											<li>

												<i class="icon-tags"></i> 

												<a href="#">Technology</a> 

												<a href="#">Education</a>

												<a href="#">Internet</a>

											</li>

										</ul>

									</div>

									<div class="span8 blog-article">

										<h2><a href="page_blog_item_innovation.html">Innovation</a></h2>

										<p>We changed the traditional way of making umbrellas and the umbrellas could shine in addition to blocking the rain so that pedestrians are more likely to be found by the drivers and other functions.</p>

										<a class="btn blue" href="page_blog_item_innovation.html">

										Read more 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

										<a class="btn blue" href="page_blog_item_innovation.html">

										Delete 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

									</div>

								</div>

								<hr>

								<div class="row-fluid">

									<div class="span4 blog-img blog-tag-data">

										<img src="media/image/b.jpg" alt="">

										<ul class="unstyled inline">

											<li><i class="icon-calendar"></i> <a href="#">JUL 08, 2016</a></li>

											<li><i class="icon-comments"></i> <a href="#">3 Comments</a></li>

										</ul>

										<ul class="unstyled inline blog-tags">

											<li>

												<i class="icon-tags"></i> 

												<a href="#">Technology</a> 

												<a href="#">Education</a>

												<a href="#">Internet</a>

											</li>

										</ul>

									</div>

									<div class="span8 blog-article">

										<h2><a href="page_blog_item_inspiration.html">Inspiration</a></h2>

										<p>A rainy day walking alone in the night, look at the people walking on the dark street holding the black umbrellas in a hurry, we suddenly thought that it would be much better if our umbrellas could shine.</p>

										<a class="btn blue" href="page_blog_item_inspiration.html">

										Read more 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

										<a class="btn blue" href="page_blog_item_inspiration.html">

										Delete 

										<i class="m-icon-swapright m-icon-white"></i>

										</a>

									</div>

								</div>

							</div>

							<!--end span9-->

							<div class="span3 blog-sidebar">

								<h2>Top Entiries</h2>

								<div class="top-news">

									<a href="#" class="btn red">

									<span>Inspiration</span>

									<em>Posted on: JUL 08, 2016</em>

									<em>

									<i class="icon-tags"></i>

									Technology, Education, Internet

									</em>

									<i class="icon-briefcase top-news-icon"></i>

									</a>

									<a href="#" class="btn green">

									<span>Innovation</span>

									<em>Posted on: JUL 09, 2016</em>

									<em>

									<i class="icon-tags"></i>

									Technology, Education, Internet

									</em>

									<i class="icon-music top-news-icon"></i>                             

									</a>

									<a href="#" class="btn blue">

									<span>Business Prospects</span>

									<em>Posted on: JUL 10, 2016</em>

									<em>

									<i class="icon-tags"></i>

									Technology, Education, Internet

									</em>

									<i class="icon-globe top-news-icon"></i>                             

									</a>

									<a href="#" class="btn yellow">

									<span>Our Plan</span>

									<em>Posted on: JUL 11, 2016</em>

									<em>

									<i class="icon-tags"></i>

									Technology, Education, Internet
									</em>

									<i class="icon-book top-news-icon"></i>            

									</a>

								</div>
								<div class="space20"></div>

								<h2>Blog Tags</h2>

								<ul class="unstyled inline sidebar-tags">

									<li><a href="#"><i class="icon-tags"></i> Business</a></li>

									<li><a href="#"><i class="icon-tags"></i> Music</a></li>

									<li><a href="#"><i class="icon-tags"></i> Internet</a></li>

									<li><a href="#"><i class="icon-tags"></i> Money</a></li>

									<li><a href="#"><i class="icon-tags"></i> Google</a></li>

									<li><a href="#"><i class="icon-tags"></i> TV Shows</a></li>

									<li><a href="#"><i class="icon-tags"></i> Education</a></li>

									<li><a href="#"><i class="icon-tags"></i> People</a></li>

									<li><a href="#"><i class="icon-tags"></i> People</a></li>

									<li><a href="#"><i class="icon-tags"></i> Math</a></li>

									<li><a href="#"><i class="icon-tags"></i> Photos</a></li>

									<li><a href="#"><i class="icon-tags"></i> Electronics</a></li>

									<li><a href="#"><i class="icon-tags"></i> Apple</a></li>

									<li><a href="#"><i class="icon-tags"></i> Canada</a></li>

								</ul>



								<div class="space20"></div>

								<h2>Flickr</h2>

								<ul class="unstyled blog-images">

									<li>

										<a  class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="media/image/1.jpg">

										<img alt="" src="media/image/1.jpg">

										</a>

									</li>

									<li><a href="#"><img alt="" src="media/image/2.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/3.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/4.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/5.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/6.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/8.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/10.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/11.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/1.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/2.jpg"></a></li>

									<li><a href="#"><img alt="" src="media/image/7.jpg"></a></li>

								</ul>

								

								<div class="space20"></div>

								<h2>Recent Comments</h2>

								<div class="blog-twitter">

									<div class="blog-twitter-block">

										<a href="">@User3</a> 

										<p>I am looking forward to it.</p>

										<a href="#"><em>http://starryumbrella.applinzi.com/Our%20Plan.html</em></a> 

										<span>2 hours ago</span>

										<i class="icon-twitter blog-twiiter-icon"></i>

									</div>

									<div class="blog-twitter-block">

										<a href="">@User2</a> 

										<p>The fact is it.</p>

										<a href="#"><em>http://starryumbrella.applinzi.com/Our%20Plan.html</em></a> 

										<span>5 hours ago</span>

										<i class="icon-twitter blog-twiiter-icon"></i>

									</div>

									<div class="blog-twitter-block">

										<a href="">@User1</a> 

										<p>We will see it.</p>

										<a href="#"><em>http://starryumbrella.applinzi.com/Our%20Plan.html</em></a> 

										<span>7 hours ago</span>

										<i class="icon-twitter blog-twiiter-icon"></i>

									</div>

								</div>

							</div>

							<!--end span3-->

						</div>

						<div class="pagination pagination-center">

							<ul>

								<li><a href="#">Prev</a></li>

								<li class="active"><a href="#">1</a></li>

								<li><a href="#">2</a></li>

								<li><a href="#">3</a></li>

								<li><a href="#">4</a></li>

								<li><a href="#">5</a></li>

								<li><a href="#">Next</a></li>

							</ul>

						</div>

					</div>

				</div>

				<!-- END PAGE CONTENT-->

			</div>

			<!-- END PAGE CONTAINER--> 

		</div>

		<!-- END PAGE -->    

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			&copy; Starry Umbrella. All rights reserved.

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<script src="media/js/app.js"></script>      

	<script>

		jQuery(document).ready(function() {    

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

</html>