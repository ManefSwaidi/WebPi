<?php 
session_start();
session_destroy();

?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.themewinter.com/html/vinazine/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2022 22:45:55 GMT -->
<head>
    <!-- Basic Page Needs =====================================-->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas ================================-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Title- -->
    <title>vinazine - HTML5 Template</title>

    <!-- CSS
   ==================================================== -->
    <!-- uikit -->
    <link rel="stylesheet" href="../css/uikit.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/animate.css">

    <!-- IcoFonts -->
    <link rel="stylesheet" href="../css/icofonts.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../css/owlcarousel.min.css">
    <link rel="stylesheet" href="../css/slick.css">



    <!-- navigation -->
    <link rel="stylesheet" href="../css/navigation.css">

    <!-- magnific popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- color -->
    <link rel="stylesheet" href="../css/colors/color-1.css">

    <!-- Responsive -->
    <link rel="stylesheet" href="../css/responsive.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="body-color">
	<!-- top bar start -->
	<section class="top-bar v2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center">
                    <div class="ts-breaking-news clearfix">
                        <h2 class="breaking-title float-left">
                            <i class="fa fa-bolt"></i> Breaking News :</h2>
                        <div class="breaking-news-content float-left" id="breaking_slider1">
                            <div class="breaking-post-content">
                                <p>
                                    <a href="#">Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.</a>
                                </p>
                            </div>
                            <div class="breaking-post-content">
                                <p>
                                    <a href="#">Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.</a>
                                </p>
                            </div>
                            <div class="breaking-post-content">
                                <p>
                                    <a href="#">Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-->

                <div class="col-lg-4 text-right align-self-center">
                    <ul class="top-social">
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-vimeo-square"></i>
                            </a>
                        </li>
                        <li class="ts-subscribe">
                            <?php 
                              if (empty($_SESSION['name']))
                                    echo '<a href="inscription.php">subscribe</a>';
                                else{
                                    echo "<h5> Welcome ".$_SESSION['name']." </h5>";
                                }
                            ?>
                            
                        </li>
                    </ul>
                </div>
                <!--end col -->


            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- end top bar-->

    <!-- ad banner start -->
    <section class="header-middle v2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html">
                            
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="banner-img">
                        <a href="index.html">
                            <img class="img-fluid" src="../images/banner/banner3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- col end -->
            </div>
            <!-- row  end -->
        </div>
        <!-- container end -->
    </section>
    <!-- ad banner end -->

    <!-- header nav start-->
    <header class="header-default">
        <div class="container">
            <div class="row">
                <!-- logo end-->
                <div class="col-lg-12">
                    <!--nav top end-->
                    <nav class="navigation ts-main-menu navigation-landscape">
                        <div class="nav-header">
                            <a class="nav-brand mobile-logo visible-xs" href="index.html">
                                <img src="../images/logo/footer_logo.png" alt="">
                            </a>
                            <div class="nav-toggle"></div>
                        </div>
                        <!--nav brand end-->

                        <div class="nav-menus-wrapper clearfix">
                            <!--nav right menu start-->
                            <ul class="right-menu align-to-right">
                                <li>
                                    <a href="login.php">
                                        <i class="fa fa-sign-out"></i>
                                    </a>
                                </li>
                                <li class="header-search">
                                    <div class="nav-search">
                                        <div class="nav-search-button">
                                            <i class="icon icon-search"></i>
                                        </div>
                                        <form>
                                            <span class="nav-search-close-button" tabindex="0">✕</span>
                                            <div class="nav-search-inner">
                                                <input type="search" name="search" placeholder="Type and hit ENTER">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <!--nav right menu end-->

                            <!-- nav menu start-->
                            <ul class="nav-menu">
                                <li class="active">
                                    <a href="#">Home</a>
                                    
                                </li>
                                <li>
                                    
                                    <div class="megamenu-panel">
                                        <div class="megamenu-tabs">
                                            
                                            <div class="megamenu-tabs-pane active">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-purple-bg" href="#">Health</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/health/health1.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Can't shed those Gym? The problem might be in</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-purple-bg" href="#">Health</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/health/health2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Smart packs parking sensor tech and beeps</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-purple-bg" href="#">Health</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/health/health3.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Deleting fears from the brain means you might never</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- mega menu end-->
                                            <div class="megamenu-tabs-pane">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-yellow-bg" href="#">Food</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/foods/food1.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-yellow-bg" href="#">Food</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/foods/food2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-yellow-bg" href="#">Food</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/foods/food3.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- mega menu end-->
                                            <div class="megamenu-tabs-pane">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-pink-bg" href="#">Fashion</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/tech/tech1.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-pink-bg" href="#">Fashion</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/tech/tech2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-pink-bg" href="#">Fashion</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/tech/tech3.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- mega menu end-->
                                            <div class="megamenu-tabs-pane">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-orange-bg" href="#">Travel</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/travel/travel2.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-orange-bg" href="#">Travel</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/travel/travel3.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-4">
                                                        <div class="item">

                                                            <div class="ts-post-thumb">
                                                                <a class="post-cat ts-orange-bg" href="#">Travel</a>
                                                                <a href="#">
                                                                    <img class="img-fluid" src="../images/news/travel/travel4.jpg" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="post-content">
                                                                <h3 class="post-title">
                                                                    <a href="#">Tourism in Dubai is booming by international tourist</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- mega menu end-->

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="category-1.html">Outing</a>
                                </li>
                                <li>
                                    <a href="../D/rokon/index.php">Stadiums</a>
                                    
                                    
                                </li>
                                <li>
                                    <a href="../00/shop-listv.php">Travel</a>
                                </li>
                                <li>
                                    <a href="../00/shop-listh.php">Accomodation</a>
                                    
                                        </li>
                                        
                                        <li>
                                            <a href="rec.php">Reclamation</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            <!--nav menu end-->
                        </div>
                    </nav>
                    <!-- nav end-->
                </div>
            </div>
        </div>
    </header>
	<!-- header nav end-->

	<!-- post wraper start-->
	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 mx-auto">
					<div class="ts-grid-box">
						<div class="login-page">
							<h3 class="log-sign-title text-center mb-25">Password recovery or <a href="registration.html">Sign Up</a></h3>
							
							<!-- row end -->
							

							<form role="form" method="post" action="forgetpassmail.php">
								<div class="form-group">
								<label for="inputUsernameEmail">Username or email</label>
								<input type="email" class="form-control" name="email">
								</div>
								<div class="form-group">
								
								
								<h5 id="errror" style="color: red;"> </h5>
								</div>
								<div class="checkbox pull-right">
								<label>
									
								</div>
								<button type="submit" class="btn btn btn-primary">
								Send
								</button>
							</form>
						</div>
					</div><!-- grid box end -->
				</div>
				<!-- col end-->

			</div>
			<!-- row end-->
		</div>
		<!-- container end-->
	</section>
	<!-- post wraper end-->




	<!-- footer social list start-->
	<section class="ts-footer-social-list">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo">
						<a href="#">
							<img src="../images/logo/footer_logo.png" alt="">
						</a>
					</div>
					<!-- footer logo end-->
				</div>
				<!-- col end-->

				<div class="col-lg-8 align-self-center">
					<ul class="footer-social">
						<li class="ts-facebook">
							<a href="#">
								<i class="fa fa-facebook"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li class="ts-google-plus">
							<a href="#">
								<i class="fa fa-google-plus"></i>
								<span>Google Plus</span>
							</a>
						</li>
						<li class="ts-twitter">
							<a href="#">
								<i class="fa fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</li>
						<li class="ts-pinterest">
							<a href="#">
								<i class="fa fa-pinterest-p"></i>
								<span>pinterest</span>
							</a>
						</li>
						<li class="ts-linkedin">
							<a href="#">
								<i class="fa fa-linkedin"></i>
								<span>Linkedin</span>
							</a>

						</li>
					</ul>
				</div>
				<!-- col end-->

			</div>
		</div>
	</section>
	<!-- footer social list end-->

	<!-- newslater start -->
	<section class="ts-newslatter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="ts-newslatter-content">
						<h2>
							Sign up for the Newsletter
						</h2>
						<p>
							Join our newsletter and get updates in your inbox. We won’t spam you and we respect your privacy.
						</p>
					</div>
				</div>
				<!-- col end-->

				<div class="col-lg-6 align-self-center">
					<div class="newsletter-form">
						<form action="#" method="post" class="media align-items-end">
							<div class="email-form-group media-body">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>
								<input type="email" name="email" id="newsletter-form-email" class="form-control" placeholder="Enter Your Email" autocomplete="off">
							</div>
							<div class="d-flex ts-submit-btn">
								<button class="btn btn-primary">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- newslater end -->

	<!-- footer start -->
	<footer class="ts-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-menu text-center">
						<ul>
							<li>
								<a href="#">Support</a>
							</li>
							<li>
								<a href="#">Suggestion</a>
							</li>
							<li>
								<a href="#">Privacy</a>
							</li>
							<li>
								<a href="#">About</a>
							</li>
							<li>
								<a href="#">Our Ads </a>
							</li>
							<li>
								<a href="#">Terms</a>
							</li>
						</ul>
					</div>
					<div class="copyright-text text-center">
						<p>&copy; 2018, Vinazine. All rights reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end -->




	<!-- javaScript Files
	=============================================================================-->

	<!-- initialize jQuery Library -->
	<script src="../js/jquery.min.js"></script>
	<!-- navigation JS -->
	<script src="../js/navigation.js"></script>
	<!-- Popper JS -->
	<script src="../js/popper.min.js"></script>

	<!-- magnific popup JS -->
	<script src="../js/jquery.magnific-popup.min.js"></script>



	<!-- Bootstrap jQuery -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script src="../js/owl-carousel.2.3.0.min.js"></script>

	<script src="../js/main.js"></script>
<?php
if(!empty($_GET['error'])){
	echo '<script> document.getElementById("errror").innerText="*Invalid Email or Password"; </script>';
}
?>

<script src="../js/jquery.min.js"></script>
    <!-- navigation JS -->
    <script src="../js/navigation.js"></script>
    <!-- uikit JS -->
    <script src="../js/uikit.min.js"></script>

    <script src="../js/uikit-icons.js"></script>
    <!-- Popper JS -->
    <script src="../js/popper.min.js"></script>

    <!-- magnific popup JS -->
    <script src="../js/jquery.magnific-popup.min.js"></script>



    <!-- Bootstrap jQuery -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="../js/owl-carousel.2.3.0.min.js"></script>

    <script src="../js/slick.min.js"></script>

    <!-- smooth scroling -->
    <script src="../js/smoothscroll.js"></script>

    <script src="../js/main.js"></script>
</body>


<!-- Mirrored from demo.themewinter.com/html/vinazine/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2022 22:45:55 GMT -->
</html>