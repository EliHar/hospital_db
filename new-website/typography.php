<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Happyhealth - Stay Healthy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="style/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="style/stylemobile.css" />
	<!--<link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" />-->

	<script src="script/modernizr.js" type="text/javascript"></script>
	<script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/jquery-ui.js" type="text/javascript"></script>
    <script src="script/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="script/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="script/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
	<script src="script/jquery.flexslider.js" type="text/javascript"></script>
	<script src="script/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="script/jquery.retina.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function (){
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
			default_width: 600,
			default_height: 420,
			social_tools: false
		});
        $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent) || ($(window).width() < 1024) ) {	
		} else {
            $('#slideshow-tabs .ui-tabs-panel').parallax("50%", 0.5);
            $('.content-home-1').parallax("0", 0.5);
            $('.content-home-2').parallax("100%", 0.5);
            $('.content-home-3').parallax("0", 0.5);
            $('#title-content').parallax("50%", 0.5);
            $("#content-side-title").show();
            setTimeout(function() { $("#content-side-title").animate({width: 'toggle'}); },100);
        }
        $('.side-title .flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
        });
        $('.link-side-title').click(function() {
			$(this).next("#content-side-title").animate({width: 'toggle'});
		});
		$('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
		});
		$('img[data-retina]').retina({checkIfImageExists: true});
		$(".open-menu").click(function(){
		    $("body").addClass("no-move");
		});
		$(".close-menu, .close-menu-big").click(function(){
		    $("body").removeClass("no-move");
		});
	});
	</script>
</head>
<body>
	<header id="main-header" class="clearfix">
        <div id="header-full">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="#" id="logo"><img src="images/logo.png" data-retina="images/logo-retina.png" alt="Happy Health - All Your Health Need" /></a>
                <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
                            <li><a href="index.php">Home</a></li>
                            <li class="current-menu-item"><a href="about.php">About Us</a></li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="newslist.php">News List</a></li>
                                    <li><a href="newsdetail.php">News Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Other</a>
                                <ul>
                                    <li><a href="#">Color Variation</a>
                                        <ul>
                                            <li><a href="index.php">Blue</a></li>
                                            <li><a href="../red/index.html">Red</a></li>
                                            <li><a href="../orange/index.html">Orange</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                    <li><a href="fullpage.php">Full Page no Sidebar</a></li>
                                    <li><a href="typography.php">Typography</a></li>
                                </ul>
                            </li>
                            <li><a href="services.php">Facilities</a></li>

                            <?php if (isset($_SESSION['user']))                                 echo '<li><a href="login.php">My Account</a></li>';                             else                                 echo '<li><a href="login.php">Login</a></li>';                             ?></li>
                            <?php if (isset($_SESSION['user']))
                                echo '<li><a href="php/logout.php">Logout</a></li>';
                            else
                                echo '<li><a href="contact.php">Contact</a></li>';
                            ?>                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-8.jpg) no-repeat 50% 0 fixed">
            <h1><span>About Happy Health Hospital</span></h1>
            <aside>
                <a href="#content-side-title" class="link-side-title"><span></span><span></span><span></span></a>
                <div id="content-side-title" class="title-gallery">
                    <div class="side-title">
                        <h3>Photo Gallery</h3>
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </header>
        <div id="main-content">
            <article class="static-page">
                <p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Integer elementum tincidunt enim a ullamcorper. Donec vitae diam ante, at sagittis ipsum. Donec pretium euismod urna. Duis auctor nisl in magna pharetra condimentum. Sed luctus lorem ac augue aliquam in accumsan risus posuere. Sed ultricies ligula tristique ligula porttitor ac malesuada neque ultrices. Donec ipsum massa, scelerisque eu consequat et, eleifend ac mauris. Maecenas malesuada ligula quis augue elementum eget mollis mauris semper. Donec pellentesque, elit tempor iaculis adipiscing, massa libero vulputate magna, et sodales felis risus id orci. Phasellus porttitor sollicitudin condimentum. Proin sed mauris massa. Nunc nisl nibh, ornare nec imperdiet in, auctor vitae ante.</p>
				<h2>H2 Tags Title</h2>
				<p>Phasellus eget odio in dui tempus tempor. Vivamus eu tortor mauris, in adipiscing sapien. <a href="#">Cras erat metus</a>, aliquet et varius quis, pharetra in nulla. Etiam suscipit tincidunt blandit. Sed ac mi sem, ac auctor urna. Duis mollis scelerisque ligula sit amet feugiat. Nullam eros orci, eleifend sit amet lobortis id, pretium vel ligula. Donec at molestie metus. Praesent dignissim dolor lacus, sit amet lobortis orci. Nullam consectetur blandit elit, at elementum ligula porta in. Proin metus tortor, consectetur sit amet mattis id, lobortis sed leo. Vivamus sem ligula, eleifend nec rutrum ac, vehicula at massa. Quisque fermentum velit ac nibh hendrerit ultricies eget nec tortor. Mauris gravida tempor ornare. Etiam eget porttitor metus.</p>
						<div class="separator"><a href="#">Top</a></div>
						<h3>H3 Tags Title</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. Allamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. </p>
						<h4>H4 Tags Title</h4>
						<img src="images/img-6.jpg" alt="Images" class="alignleft imgframe" />
						<p>Nam odio sem, vulputate vitae gravida vitae, porta eu mi. Sed bibendum sodales sollicitudin. Sed scelerisque elementum magna ac feugiat. Nam ipsum arcu, molestie eu sagittis sit amet, lobortis id diam. Suspendisse luctus est et enim tempor molestie. Proin pretium accumsan elit cursus blandit. Sed aliquam porttitor viverra.</p> 
						<p>Donec nibh arcu, accumsan at fringilla a, rhoncus a augue. Nulla sit amet lacus ut augue tempus blandit. Donec nibh arcu, accumsan at fringilla a, rhoncus a augue. Nulla sit amet lacus ut augue tempus blandit.</p>
						<ul>
							<li>Proin metus tortor, consectetur sit amet mattis id, lobortis sed leo.</li>
							<li>Proin pretium accumsan elit cursus blandit.</li>
							<li>Sed aliquam porttitor viverra.</li>
							<li>Donec nibh arcu, accumsan at fringilla a, rhoncus a augue.</li>
							<li>Nulla sit amet lacus ut augue tempus blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Maecenas sodales condimentum laoreet.</li>
						</ul>
						<h4>Table Sample</h4>
						<table>
							<thead>
								<tr>
									<th scope="col">Feature</th>
									<th scope="col">Free Package</th>
									<th scope="col">Business Package</th>
									<th scope="col">Premium Package</th>
								</tr>
							</thead>
							<tfoot>
							    <tr>
							        <td></td>
							        <td><strong><a href="#">Order Now</a></strong></td>
							        <td><strong><a href="#">Order Now</a></strong></td>
							        <td><strong><a href="#">Order Now</a></strong></td>
							    </tr>
							</tfoot>
							<tbody>
								<tr class="odd">
							        <td class="cellfeat">OS</td>
							        <td>Linux</td>
							        <td>Windows</td>
							        <td>MacOs</td>
							    </tr>
							    <tr>
							        <td class="cellfeat">24H Support</td>
							        <td><img src="images/icon_20.png" alt="No" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr class="odd">
							        <td class="cellfeat">Free Lifetime Update</td>
							        <td><img src="images/icon_20.png" alt="No" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr>
							        <td class="cellfeat">Email Address</td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr class="odd">
							        <td class="cellfeat">Search Engine Optimisation</td>
							        <td><img src="images/icon_20.png" alt="No" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr>
							        <td class="cellfeat">24H Support</td>
							        <td><img src="images/icon_20.png" alt="No" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr class="odd">
							        <td class="cellfeat">Free Lifetime Update</td>
							        <td><img src="images/icon_20.png" alt="No" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr>
							        <td class="cellfeat">Email Address</td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr class="odd">
							        <td class="cellfeat">Search Engine Optimisation</td>
							        <td><img src="images/icon_20.png" alt="No" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr>
							        <td class="cellfeat">Email Address</td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							        <td><img src="images/icon_9.png" alt="Yes" /></td>
							    </tr>
							    <tr class="odd">
							        <td class="cellfeat">Price</td>
							        <td><strong>Free</strong></td>
							        <td><strong>$199</strong></td>
							        <td><strong>$299</strong></td>
							    </tr>
							</tbody>
						</table>
						<h5>H5 Tags Title</h5>
						<blockquote><p>Proin metus tortor, consectetur sit amet mattis id, lobortis sed leo. Vivamus sem ligula, eleifend nec rutrum ac, vehicula at massa. Quisque fermentum velit ac nibh hendrerit ultricies eget nec tortor. Quisque fermentum velit ac nibh hendrerit ultricies eget nec tortor.</p></blockquote>
						<h6>H6 Tags Title</h6>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris cursus mi nec turpis interdum cursus semper neque scelerisque. Suspendisse sit amet arcu risus. Aenean mollis tristique eros et feugiat. Praesent urna mi, adipiscing et pharetra eget, dapibus sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse sit amet arcu risus. Aenean mollis tristique eros et feugiat. Praesent urna mi, adipiscing et pharetra eget, dapibus sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<div class="colhalf">
									<h3>Title H3</h3>
						<blockquote><p>Proin metus tortor, consectetur sit amet mattis id, lobortis sed leo. Vivamus sem ligula, eleifend nec rutrum ac, vehicula at massa. Quisque fermentum velit ac nibh hendrerit ultricies eget nec tortor. Quisque fermentum velit ac nibh hendrerit ultricies eget nec tortor.</p></blockquote>
						<h6>H6 Tags Title</h6>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris cursus mi nec turpis interdum cursus semper neque scelerisque. Suspendisse sit amet arcu risus. Aenean mollis tristique eros et feugiat. Praesent urna mi, adipiscing et pharetra eget, dapibus sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse sit amet arcu risus. Aenean mollis tristique eros et feugiat. Praesent urna mi, adipiscing et pharetra eget, dapibus sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
								<div class="colhalf lastcol">
									<h2>This is Last Column</h2>
									<p>Phasellus eget odio in dui tempus tempor. Vivamus eu tortor mauris, in adipiscing sapien. Cras erat metus, aliquet et varius quis, pharetra in nulla. Etiam suscipit tincidunt blandit. Sed ac mi sem, ac auctor urna. Duis mollis scelerisque ligula sit amet feugiat. Nullam eros orci, eleifend sit amet lobortis id, pretium vel ligula. Donec at molestie metus. Praesent dignissim dolor lacus, sit amet lobortis orci. Nullam consectetur blandit elit, at elementum ligula porta in. Proin metus tortor, consectetur sit amet mattis id, lobortis sed leo. Vivamus sem ligula, eleifend nec rutrum ac, vehicula at massa. Quisque fermentum velit ac nibh hendrerit ultricies eget nec tortor. Mauris gravida tempor ornare. Etiam eget porttitor metus.</p>
									<div class="separator"><a href="#">Top</a></div>
									<p>Nullam consectetur blandit elit, at elementum ligula porta in. Proin metus tortor, consectetur sit amet mattis id, lobortis sed leo. Vivamus sem ligula, eleifend nec rutrum ac, vehicula at massa. Quisque fermentum velit ac nibh hendrerit ultricies eget nec tortor. Mauris gravida tempor ornare. Etiam eget porttitor metus.</p>
								</div>
								<div class="clear"></div>
            </article>
        </div>
        <div id="sidebar">
            <aside class="widget-container">
                <div class="widget-wrapper clearfix">
				    <h3 class="widget-title">Opening Hour</h3>
                    <ul class="nav-schedule">
                        <li class="clearfix"><strong>Mon</strong> <span>7am - 11am</span></li>
				        <li class="clearfix"><strong>Tue - Wed</strong> <span>11am - 10pm</span></li>
                        <li class="clearfix"><strong>Thu</strong> <span>10am - 9pm</span></li>
				        <li class="clearfix"><strong>Fri</strong> <span>11am - 8pm</span></li>
                        <li class="clearfix"><strong>Sat</strong> <span>9am - 3pm</span></li>
                        <li class="clearfix"><strong>Sun</strong> <span>9am - 4pm</span></li>
				        <li class="clearfix"><strong>Public Holiday</strong> <span>8am - 5pm</span></li>
                    </ul>
				</div>
                <div class="binder-left"></div><div class="binder-right"></div>
            </aside>
            <aside class="widget-container">
                <div class="widget-wrapper clearfix">
				    <h3 class="widget-title">About Happy Health</h3>
				    <ul>			
				        <li><a href="#">Abour Happy Health Hospital</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Vision and Mission</a></li>
                        <li><a href="#">Board of Director</a></li>
                        <li><a href="#">Our Location</a></li>
                        <li><a href="#">Contact Happy Health</a></li>
				    </ul>
				</div>
                <div class="binder-left"></div><div class="binder-right"></div>
            </aside>
            <aside class="widget-container widget_wc_news">
				<div class="widget-wrapper clearfix">
				    <h3 class="widget-title">Latest Blog</h3>
					<ul class="menu news-sidebar">			
						<li class="clearfix">
				            <img src="images/img-10.jpg" data-retina="images/img-10-retina.jpg" alt="Another Sample of Blog Post" class="imgframe alignleft" />				
				            <h4><a href="#">Another Sample of Blog Post</a></h4>
				            <span class="date-news">May 5, 2013</span>
				            <h5><a href="#" title="Comment on Another Sample of Blog Post">No Comments</a></h5>
				        </li>
						<li class="clearfix">
				            <img src="images/img-11.jpg" data-retina="images/img-11-retina.jpg" alt="Another Sample of Blog Post" class="imgframe alignleft" />		
				            <h4><a href="#">Blog Post with Featured Image</a></h4>
				            <span class="date-news">April 30, 2013</span>
				            <h5><a href="#" title="Comment on Blog Post with Featured Image">Comments (3)</a></h5>
				        </li>
				        <li class="clearfix">
				            <img src="images/img-12.jpg" data-retina="images/img-12-retina.jpg" alt="Another Sample of Blog Post" class="imgframe alignleft" />
				            <h4><a href="#">Sample Gallery Post without Image</a></h4>
				            <span class="date-news">April 30, 2013</span>
				            <h5><a href="#" title="Comment on Sample Gallery Post without Featured Image">No Comments</a></h5>
				        </li>
				    </ul>
				    <a href="#" class="button-more">Read More Blog Post</a>
                </div>
                <div class="binder-left"></div><div class="binder-right"></div>
            </aside>
            <aside id="gw_gallery-5" class="widget-container widget_gw_gallery">
                <div class="widget-wrapper clearfix"><h3 class="widget-title">Gallery</h3>  
                    <script type="text/javascript">
				        jQuery(document).ready(function($){
				            $("#gw_gallery-5-slide").flexslider({
								animation: "slide",
								animationLoop: false,
								pauseOnAction: true
				            });
				        });
				    </script>
									<div id="gw_gallery-5-slide" class="flexslider">
										<ul class="slides">
											<li>
												<div class="slides-image">
													<a href="images/img-14-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-14.jpg" alt="Beauty in Green"  data-retina="images/img-14-retina.jpg" /></a>
												</div><h4><a href="images/img-14-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Beauty in Green blue red brown</a></h4>
											</li>
							         		<li>
												<div class="slides-image">
													<a href="images/img-14-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-14.jpg" alt="Eagle Nest"  data-retina="images/img-14-retina.jpg" /></a>
												</div><h4><a href="images/img-14-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Eagle Nest</a></h4>
											</li>
							         	</ul>
							        </div>
							        <a href="http://cubicthemes.com/develop/workchaos/blog/" class="button-more">More Photo</a>
									</div>
                <div class="binder-left"></div><div class="binder-right"></div>
            </aside>
        </div>
    </div>
    <div id="content-footer" class="clearfix">
        <h4 id="title-footer"><span>Our Doctor Specialist</span></h4>
        <p id="sub-title">We handpicked <a href="#">our doctor to make sure</a> they are perfect with the jobdesk</p>
        <ul id="list-doctor" class="clearfix">
            <li><a href="#"><img src="images/img-15.jpg" data-retina="images/img-15-retina.jpg" alt="" />
                <strong>Dr. John Doe</strong>
                <span>Psychriatic</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-16.jpg" data-retina="images/img-16-retina.jpg" alt="" />
                <strong>Jane Precise</strong>
                <span>Dentist</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-17.jpg" data-retina="images/img-17-retina.jpg" alt="" />
                <strong>Robert Newton</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-18.jpg" data-retina="images/img-18-retina.jpg" alt="" />
                <strong>Rebecca</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-19.jpg" data-retina="images/img-19-retina.jpg" alt="" />
                <strong>John Staton</strong>
                <span>Anesthesiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-20.jpg" data-retina="images/img-20-retina.jpg" alt="" />
                <strong>Sumirah</strong>
                <span>General Doctor</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-15.jpg" data-retina="images/img-15-retina.jpg" alt="" />
                <strong>Dr. John Doe</strong>
                <span>Psychriatic</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-16.jpg" data-retina="images/img-16-retina.jpg" alt="" />
                <strong>Jane Precise</strong>
                <span>Dentist</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-17.jpg" data-retina="images/img-17-retina.jpg" alt="" />
                <strong>Robert Newton</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-18.jpg" data-retina="images/img-18-retina.jpg" alt="" />
                <strong>Rebecca</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-19.jpg" data-retina="images/img-19-retina.jpg" alt="" />
                <strong>John Staton</strong>
                <span>Anesthesiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-20.jpg" data-retina="images/img-20-retina.jpg" alt="" />
                <strong>Sumirah</strong>
                <span>General Doctor</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-15.jpg" data-retina="images/img-15-retina.jpg" alt="" />
                <strong>Dr. John Doe</strong>
                <span>Psychriatic</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-16.jpg" data-retina="images/img-16-retina.jpg" alt="" />
                <strong>Jane Precise</strong>
                <span>Dentist</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-17.jpg" data-retina="images/img-17-retina.jpg" alt="" />
                <strong>Robert Newton</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-18.jpg" data-retina="images/img-18-retina.jpg" alt="" />
                <strong>Rebecca</strong>
                <span>Radiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-19.jpg" data-retina="images/img-19-retina.jpg" alt="" />
                <strong>John Staton</strong>
                <span>Anesthesiology</span>
                </a>
            </li>
            <li><a href="#"><img src="images/img-20.jpg" data-retina="images/img-20-retina.jpg" alt="" />
                <strong>Sumirah</strong>
                <span>General Doctor</span>
                </a>
            </li>
        </ul>
    </div>
    <div id="three-footer" class="clearfix">
        <article class="clearfix">
            <em><img src="images/icon-footer-1.png" data-retina="images/icon-footer-1-retina.png" alt="" /></em>
            <strong>Call Us Now</strong>
            <span>+62-4056-6787 or +62-345-356</span>
        </article>
        <article class="clearfix">
            <a href="#"><em><img src="images/icon-footer-2.png" data-retina="images/icon-footer-2-retina.png" alt="" /></em>
            <strong>Live Chat</strong>
            <span>Chat with our Specialist</span>
            </a>
        </article>
        <article class="last clearfix">
            <a href="#"><em><img src="images/icon-footer-3.png" data-retina="images/icon-footer-3-retina.png" alt="" /></em>
            <strong>Schedule</strong>
            <span>Make Appointment &amp; Check our Schedule</span>
            </a>
        </article>
    </div>
    <footer id="main-footer">
        <nav>
            <ul id="nav-footer">
                <li><a href="#">Home</a></li>        
                <li><a href="#">About</a></li> 
                <li><a href="#">Doctor</a></li> 
                <li><a href="#">Services</a></li> 
                <li><a href="#">Blog</a></li> 
                <li><a href="#">Photo</a></li> 
                <li><a href="#">Article</a></li> 
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <aside>
            <h5 id="text-footer">P Sherman, 42 Wallaby Way, Sydney, Australia | Phone: +62834856, Fax: +62849684 | Email: hello@cubicthemes.com</h5>
            <div id="footer-copyright" class="clearfix">
                <p>Copyright &copy; 2013 Cubicthemes.com, All Rights Reserved</p>
                <a href="#" id="logo-footer"><img src="images/logo-footer.png" data-retina="images/logo-footer-retina.png" alt="Happy Health" /></a>
            </div>
        </aside>
    </footer>
</body>
</html>