<?php
session_start();
  
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.themewinter.com/html/vinazine/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2022 22:44:30 GMT -->
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
	<link rel="stylesheet" href="css/uikit.min.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- IcoFonts -->
	<link rel="stylesheet" href="css/icofonts.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owlcarousel.min.css">
	<link rel="stylesheet" href="css/slick.css">



	<!-- navigation -->
	<link rel="stylesheet" href="css/navigation.css">

	<!-- magnific popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- color -->
	<link rel="stylesheet" href="css/colors/color-1.css">

	<!-- Responsive -->
	<link rel="stylesheet" href="css/responsive.css">


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
                              		echo '<a href="../pi/view/inscription.php">subscribe</a>';
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
							<img class="img-fluid" src="images/banner/banner3.jpg" alt="">
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
								<img src="images/logo/footer_logo.png" alt="">
							</a>
							<div class="nav-toggle"></div>
						</div>
						<!--nav brand end-->

						<div class="nav-menus-wrapper clearfix">
							<!--nav right menu start-->
							<ul class="right-menu align-to-right">
								<li>
									<a href="../pi/view/login.php">
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
									<a href="#">Lifestyle</a>
									<div class="megamenu-panel">
										<div class="megamenu-tabs">
											<ul class="megamenu-tabs-nav">
												<li class="active">
													<a href="#">Health</a>
												</li>
												<li>
													<a href="#">Food</a>
												</li>
												<li>
													<a href="#">Fashion</a>
												</li>
												<li>
													<a href="#">Travel</a>
												</li>
											</ul>
											<div class="megamenu-tabs-pane active">
												<div class="row">
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-purple-bg" href="#">Health</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/health/health1.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/health/health2.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/health/health3.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/foods/food1.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/foods/food2.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/foods/food3.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/tech/tech1.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/tech/tech2.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/tech/tech3.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/travel/travel2.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/travel/travel3.jpg" alt="">
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
																	<img class="img-fluid" src="images/news/travel/travel4.jpg" alt="">
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
									<a href="category-1.html">Technology</a>
								</li>
								<li>
									<a href="#">Video</a>
									<div class="megamenu-panel">
										<div class="row">
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech1.jpg" alt="">
														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>
													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech2.jpg" alt="">

														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>

													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech3.jpg" alt="">

														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>

													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech4.jpg" alt="">
														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>
													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<a href="category-2.html">Travel</a>
								</li>
								<li>
									<a href="#">Features</a>
									<ul class="nav-dropdown">
										<li>
											<a href="#">Category layout</a>
											   <ul class="nav-dropdown">
                                       <li>
                                          <a href="category-1.html">Category layout 1</a>
                                       </li>
                                       <li>
                                          <a href="category-2.html">Category layout 2 </a>
                                       </li>
                                       <li>
                                          <a href="category-3.html">Category layout 3</a>
                                       </li>
                                       <li>
                                          <a href="category-4.html">Category layout 4</a>
                                       </li>
                                       <li>
                                          <a href="category-5.html">Category layout 5</a>
                                       </li>
                                       <li>
                                          <a href="category-6.html">Category layout 6</a>
                                       </li>
                                    </ul>
										</li>
										<li>
											<a href="#">Posts Formate</a>
											<ul class="nav-dropdown">
												<li>
													<a href="single-post-1.html">Single Post 1</a>
												</li>
												<li>
													<a href="single-post-2.html">Single Post 2 </a>
												</li>
												<li>
													<a href="single-post-3.html">Single Post 3 </a>
												</li>
												<li>
													<a href="single-post-4.html">Single Post 4 </a>
												</li>
												<li>
													<a href="single-post-5.html">Single Post 5</a>
												</li>
												<li>
													<a href="single-post-6.html">Single Post 6</a>
												</li>
												<li>
													<a href="single-post-7.html">Single Post 7</a>
												</li>
												<li>
													<a href="single-post-8.html">Single Post 8</a>
												</li>
												<li>
													<a href="single-post-9.html">Single Post 9</a>
												</li>
												<li>
													<a href="single-post-10.html">Single Post 10</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Pages</a>
											<ul class="nav-dropdown">
												<li>
													<a href="author.html">Author</a>
												</li>
												<li>
													<a href="contact.html">Contact Us</a>
												</li>
												<li>
														<a href="login.html">Log In</a>
												</li>
												<li>
														<a href="registration.html">registration</a>
												</li>
												<li>
													<a href="404.html">404 </a>
												</li>
											</ul>
										</li><!--Pages end-->
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

	<!-- start blog wrapper -->
	<section class="block-wrapper mt-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 pr-10">
					<div class="ts-grid-box ts-col-box">
						<div class="item">
							<a class="post-cat ts-green-bg" href="#">Sports</a>
							<div class="post-content">
								<h3 class="post-title md">
									<a href="#">Tourism in Dubai is bom international tourist by their welcomes</a>
								</h3>
								<span class="post-date-info">
									<i class="fa fa-clock-o"></i>
									March 21, 2019
								</span>
								<p>
									Black farmers in the US’s South faced with continued failure in their efforts to run successful farms their launched a lawsuit
									claiming that “white racism” their produce crop launched a lawsuit claiming that yields for doing.that yields for doing.
								</p>
								<ul class="post-meta-info">
									<li class="author">
										<a href="#">
											<img src="images/avater/author1.jpg" alt=""> Donald Ramos
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- item end-->
					</div>
					<!-- ts-grid-box end-->
				</div>
				<!-- col end-->
				<div class="col-lg-6 pl-0 pr-10">
					<div id="featured-slider-2" class="owl-carousel ts-overlay-style ts-featured">
						<div class="item" style="background-image:url(images/news/travel/travel1.jpg)">
							<a class="post-cat ts-orange-bg" href="#">TRAVEL</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<h2 class="post-title lg">
										<a href="#">Netcix cuts out the chill with an integrated personal trainer on running</a>
									</h2>
									<ul class="post-meta-info">
										<li class="author">
											<a href="#">
												<img src="images/avater/author1.jpg" alt=""> Donald Ramos
											</a>
										</li>
										<li>
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</li>
										<li class="active">
											<i class="icon-fire"></i>
											3,005
										</li>
									</ul>
								</div>
							</div>
							<!--/ Featured post end -->

						</div>
						<!-- Item 1 end -->
						<div class="item" style="background-image:url(images/news/travel/travel2.jpg)">
							<a class="post-cat ts-orange-bg" href="#">TRAVEL</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<h2 class="post-title lg">
										<a href="#">Cuts out the chill with an integrated personal trainer on running</a>
									</h2>
									<ul class="post-meta-info">
										<li class="author">
											<a href="#">
												<img src="images/avater/author1.jpg" alt=""> Donald Ramos
											</a>
										</li>
										<li>
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</li>
										<li class="active">
											<i class="icon-fire"></i>
											3,005
										</li>
									</ul>
								</div>
							</div>
							<!--/ Featured post end -->
						</div>
						<!-- Item 2 end -->

						<div class="item" style="background-image:url(images/news/travel/travel3.jpg)">
							<a class="post-cat ts-orange-bg" href="#">TRAVEL</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<h2 class="post-title lg">
										<a href="#">Netcix cuts out the chill with an integrated personal trainer on running</a>
									</h2>
									<ul class="post-meta-info">
										<li class="author">
											<a href="#">
												<img src="images/avater/author1.jpg" alt=""> Donald Ramos
											</a>
										</li>
										<li>
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</li>
										<li class="active">
											<i class="icon-fire"></i>
											3,005
										</li>
									</ul>
								</div>
							</div>
							<!--/ Featured post end -->
						</div>
						<!-- Item 3 end -->
					</div>
					<!-- Featured owl carousel end-->
				</div>
				<!-- col end-->
				<div class="col-lg-3 pl-0">
					<div class="ts-post-overlay-style-1">
						<div class="ts-overlay-style">
							<div class="item">
								<div class="ts-post-thumb">
									<a class="post-cat ts-blue-light-bg" href="#">Technology</a>
									<a href="#">
										<img class="img-fluid" src="images/news/tech/tech5.jpg" alt="">
									</a>
								</div>

								<div class="overlay-post-content">
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">Tourism in Dubai is booming international tourist most visited place</a>
										</h3>
										<ul class="post-meta-info">
											<li>
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end item-->
						</div>
						<!-- ts overlay style end-->
						<div class="ts-overlay-style">
							<div class="item">
								<div class="ts-post-thumb">
									<a class="post-cat ts-pink-bg" href="#">Music</a>
									<a href="#">
										<img class="img-fluid" src="images/news/music/music1.jpg" alt="">
									</a>
								</div>

								<div class="overlay-post-content">
									<div class="post-content">
										<h3 class="post-title">
											<a href="#"> Dubai in Tourism  is booming international tourist most visited place</a>
										</h3>
										<ul class="post-meta-info">
											<li>
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end item-->
						</div>
						<!-- ts overlay style end-->
					</div>
				</div>
				<!--col end-->
			</div>
		</div>
	</section>
	<!-- end  blog wrapper -->

	<!-- start  blog wrapper -->
	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="ts-grid-box category-box-item-3">
						<h2 class="ts-title float-left">Hot Topics</h2>
						<a href="#" class="view-all-link float-right">View All</a>
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-lg-6">
								<div class="item">
									<div class="ts-post-thumb">
										<a class="post-cat ts-orange-bg" href="#">Travel</a>
										<a href="#">
											<img class="img-fluid" src="images/news/travel/travel8.jpg" alt="">
										</a>
									</div>
									<div class="post-content">
										<h3 class="post-title md">
											<a href="#">They are backed up Kennedy Darling and Cras named to return</a>
										</h3>
										<ul class="post-meta-info">
											<li class="author">
												<a href="#">
													<img src="images/avater/author1.jpg" alt=""> Donald
												</a>
											</li>
											<li>
												<i class="fa fa-clock-o"></i>
												Jun 21, 2019
											</li>
											<li class="active">
												<i class="icon-fire"></i>
												305
											</li>
										</ul>
										<p>
											Black farmers in the USA is South faced with the most continued failure in their efforts to run
										</p>
									</div>
								</div>
								<!-- ts-grid-box end-->
							</div>
							<!-- col end-->
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-6">
										<div class="item mb-20">
											<div class="ts-post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/fashion/fashion1.jpg" alt="">
												</a>
											</div>
											<div class="post-content">
												<h3 class="post-title">
													<a href="#">Tourism Dubai booming international tourist</a>
												</h3>
												<span class="post-date-info">
													<i class="fa fa-clock-o"></i>
													March 21, 2019
												</span>
											</div>
										</div>
									</div>
									<!-- col end-->
									<div class="col-lg-6">
										<div class="item mb-20">
											<div class="ts-post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/tech3.jpg" alt="">
												</a>
											</div>
											<div class="post-content">
												<h3 class="post-title">
													<a href="#">Youth vaping an 'epidemic'; crackdown</a>
												</h3>
												<span class="post-date-info">
													<i class="fa fa-clock-o"></i>
													March 21, 2019
												</span>
											</div>
										</div>
									</div>
									<!-- col end-->
									<div class="col-lg-6">
										<div class="item">
											<div class="ts-post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/tech/tech1.jpg" alt="">
												</a>
											</div>
											<div class="post-content">
												<h3 class="post-title">
													<a href="#">How to get the most when selling your iPhone</a>
												</h3>
												<span class="post-date-info">
													<i class="fa fa-clock-o"></i>
													March 21, 2019
												</span>
											</div>
										</div>
									</div>
									<!-- col end-->
									<div class="col-lg-6">
										<div class="item">
											<div class="ts-post-thumb">
												<a href="#">
													<img class="img-fluid" src="images/news/travel/travel1.jpg" alt="">
												</a>
											</div>
											<div class="post-content">
												<h3 class="post-title">
													<a href="#">Beats did announce something, after all</a>
												</h3>
												<span class="post-date-info">
													<i class="fa fa-clock-o"></i>
													March 21, 2019
												</span>
											</div>
										</div>
									</div>
									<!-- col end-->
								</div>
							</div>
						</div>
						<!-- row end-->

					</div>
					<!-- ts-populer-post-box end-->

					<div class="border-top border-top1 mb-30"></div>

					<div class="ts-grid-box clearfix ts-category-title">
						<h2 class="ts-title float-left">Travel</h2>
						<a href="#" class="view-all-link float-right">View All</a>
					</div>

					<div class="row">
						<div class="col-lg-8 category-box-item">
							<div class="ts-grid-box ts-grid-content">
								<div class="item">
									<div class="ts-post-thumb">
										<a class="post-cat ts-orange-bg" href="#">Travel</a>
										<a href="#">
											<img class="img-fluid" src="images/news/travel/travel8.jpg" alt="">
										</a>
									</div>
									<div class="post-content">
										<h3 class="post-title md">
											<a href="#">Home Office suspends cooperation with US over two Isis 'Beatles' who could</a>
										</h3>
										<ul class="post-meta-info">
											<li class="author">
												<a href="#">
													<img src="images/avater/author1.jpg" alt=""> Donald
												</a>
											</li>
											<li>
												<i class="fa fa-clock-o"></i>
												Jun 21, 2019
											</li>
											<li class="active">
												<i class="icon-fire"></i>
												305
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- ts-grid-box end-->
						</div>
						<!-- col end-->
						<div class="col-lg-4">
							<div class="ts-grid-box ts-grid-content ts-list-post-box">
								<div class="item">
									<a class="post-cat ts-orange-bg" href="#">Travel</a>
									<div class="ts-post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/travel/travel1.jpg" alt="">
										</a>
									</div>
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">Tourism in Dubai is booming by international tourist</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
								<!-- end item-->
								<div class="item">
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">critical points Zuckerberg’s epic booming manifesto</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
								<!-- end item-->
								<div class="item">
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">The clock is ticking for e-cig companies to block users</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
								<!-- end item-->
							</div>
							<!-- ts grid box-->
						</div>
						<!-- col end-->

					</div>
					<!-- row end-->

				</div>
				<!-- col end-->
				<div class="col-lg-3">
					<div class="right-sidebar">
						<div class="ts-grid-box widgets ts-social-list-item">
							<h3 class="ts-title">Follow us</h3>
							<ul>
								<li class="ts-facebook">
									<a href="#">
										<i class="fa fa-facebook"></i>
										<b>5.5 k </b>
										<span>Likes</span>
									</a>

								</li>
								<li class="ts-google-plus">
									<a href="#">
										<i class="fa fa-google-plus"></i>
										<b>5.5 k </b>
										<span>Follwers</span>
									</a>

								</li>
								<li class="ts-twitter">
									<a href="#">
										<i class="fa fa-twitter"></i>
										<b>12.5 k </b>
										<span>Follwers</span>
									</a>
								</li>
								<li class="ts-pinterest">
									<a href="#">
										<i class="fa fa-pinterest-p"></i>
										<b>5.5 k </b>
										<span>Photos</span>
									</a>
								</li>
								<li class="ts-linkedin">
									<a href="#">
										<i class="fa fa-linkedin"></i>
										<b>5.5 k </b>
										<span>Follwers</span>
									</a>
								</li>
								<li class="ts-youtube">
									<a href="#">
										<i class="fa fa-youtube"></i>
										<b>5.5 k </b>
										<span>Follwers</span>
									</a>
								</li>
								<li class="ts-instragram">
									<a href="#">
										<i class="fa fa-instagram"></i>
										<b>5.5 k </b>
										<span>Follwers</span>
									</a>
								</li>
								<li class="ts-dribble">
									<a href="#">
										<i class="fa fa-dribbble"></i>
										<b>5.5 k </b>
										<span>Follwers</span>
									</a>
								</li>
								<li class="ts-behance">
									<a href="#">
										<i class="fa fa-behance"></i>
										<b>5.5 k </b>
										<span>Follwers</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- widgets end-->

						<div class="widgets widget-banner">
							<a href="#">
								<img class="img-fluid" src="images/banner/sidebar-banner2.jpg" alt="">
							</a>
						</div>
						<!-- widgets end-->
						<div class="widgets post-list-item">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation">
									<a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">
										<i class="fa fa-clock-o"></i>
										Recent
									</a>
								</li>
								<li role="presentation">
									<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
										<i class="fa fa-heart"></i>
										Favorites
									</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active ts-grid-box post-tab-list" id="home">
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/sports/sports2.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="green-color"> sports</a>
											</span>
											<h4 class="post-title">
												<a href="#">Tourism in Dubai is booming by gun</a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media ">
										<img class="d-flex sidebar-img" src="images/news/tech/tech4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="blue-color"> Technology</a>
											</span>
											<h4 class="post-title">
												<a href="#">Tesla just lost its of global finance</a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/sports/sports3.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="green-color"> Sports</a>
											</span>
											<h4 class="post-title">
												<a href="#">easy teriya chicken with broccoli</a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/fashion/fashion4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="pink-color"> Fashion</a>
											</span>
											<h4 class="post-title">
												<a href="#">Tourism in Dubai is booming by gun</a>
											</h4>
										</div>
									</div>
									<!--post-content end-->

								</div>
								<!--ts-grid-box end -->

								<div role="tabpanel" class="tab-pane ts-grid-box post-tab-list" id="profile">
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/sports/sports2.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="green-color"> sports</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media ">
										<img class="d-flex sidebar-img" src="images/news/tech/tech4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="blue-color"> Technology</a>
											</span>
											<h4 class="post-title">
												<a href="#">17 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/sports/sports4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="green-color"> Sportd</a>
											</span>
											<h4 class="post-title">
												<a href="#">20 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/fashion/fashion4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="pink-color"> Fashion</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->

								</div>
								<!--ts-grid-box end -->
							</div>
							<!-- tab content end-->
						</div>
						<!-- widgets end-->
					</div>
				</div>
			</div>
			<!-- row end-->
		</div>
		<!-- container end-->
	</section>
	<!-- end  blog wrapper -->

	<!-- blog post wrapper start -->
	<section class="block-wrapper pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="uk-position-relative uk-visible-toggle uk-light video-slider" uk-slider>

						<ul class="uk-slider-items">
							<li class="uk-width-3-4">
								<div class="uk-panel">
									<div class="post-video">
										<img src="images/news/travel/travel2.jpg" alt="">
										<div class="post-video-content">

											<h3>
												<a href="#"> First time the Swiss State Secretart for Economic Swiss State Secretart for Economic indicated indicated
													that Uber taxi</a>
											</h3>
											<span class="post-date-info">
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</span>
										</div>
										<a href="https://www.youtube.com/watch?v=_0UO1NcheAE" class="ts-play-btn">
											<i class="fa fa-play" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</li>
							<li class="uk-width-3-4">
								<div class="uk-panel">
									<div class="post-video">
										<img src="images/news/travel/travel3.jpg" alt="">
										<div class="post-video-content">

											<h3>
												<a href="#"> For the first time the Swiss State Secretart forSwiss State Secretart for Economic indicated Economic indicated
													that Uber taxi</a>
											</h3>
											<span class="post-date-info">
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</span>
										</div>
										<a href="https://www.youtube.com/watch?v=_0UO1NcheAE" class="ts-play-btn">
											<i class="fa fa-play" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</li>
							<li class="uk-width-3-4">
								<div class="uk-panel">
									<div class="post-video">
										<img src="images/news/travel/travel4.jpg" alt="">
										<div class="post-video-content">

											<h3>
												<a href="#"> New York Fashion Week continues with its penultimate day featuring looks from Marc Jacobs and more.</a>
											</h3>
											<span class="post-date-info">
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</span>
										</div>
										<a href="https://www.youtube.com/watch?v=_0UO1NcheAE" class="ts-play-btn">
											<i class="fa fa-play" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</li>
							<li class="uk-width-3-4">
								<div class="uk-panel">
									<div class="post-video">
										<img src="images/news/travel/travel2.jpg" alt="">
										<div class="post-video-content">

											<h3>
												<a href="#"> For the first time the Swiss State Secretart for Economic indicated that Uber taxi</a>
											</h3>
											<span class="post-date-info">
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</span>
										</div>
										<a href="https://www.youtube.com/watch?v=_0UO1NcheAE" class="ts-play-btn">
											<i class="fa fa-play" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</li>
							<li class="uk-width-3-4">
								<div class="uk-panel">
									<div class="post-video">
										<img src="images/news/travel/travel2.jpg" alt="">
										<div class="post-video-content">

											<h3>
												<a href="#"> For the first time the Swiss State Secretart for Economic indicated Swiss State Secretart for Economic indicated
													that Uber taxi</a>
											</h3>
											<span class="post-date-info">
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</span>
										</div>
										<a href="https://www.youtube.com/watch?v=_0UO1NcheAE" class="ts-play-btn">
											<i class="fa fa-play" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</li>
						</ul>

						<a class="uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
						<a class="uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blog post wrapper end -->



	<div class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ad-banner text-center mb-15">
						<a href="index.html">
							<img src="images/banner/banner2.jpg" alt="">
						</a>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->


		</div>
		<!-- container end -->
	</div>


	<!-- blog post wrapper start-->
	<section class="block-wrapper mb-20">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 ts-content-box-item">
					<div class="ts-grid-box clearfix ts-category-title">
						<h2 class="ts-title float-left">World News</h2>
						<a href="#" class="view-all-link float-right">View All</a>
					</div>
					<div class="row mb-30">
						<div class="col-lg-6 category-post-item1">
							<div class="ts-grid-box ts-grid-content">
								<div class="item">
									<div class="ts-post-thumb">
										<a class="post-cat ts-orange-bg" href="#">Travel</a>
										<a href="#">
											<img class="img-fluid" src="images/news/travel/travel9.jpg" alt="">
										</a>
									</div>
									<div class="post-content">
										<h3 class="post-title md">
											<a href="#">They’re back! Kennedy Darling Cras named to return</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
								<!-- item end-->
							</div>
							<!-- ts gird box end-->
						</div>
						<!-- col end-->
						<div class="col-lg-3">
							<div class="ts-grid-box ts-col-box">
								<div class="item">
									<a class="post-cat ts-blue-light-bg" href="#">Technology</a>
									<div class="post-content">

										<h3 class="post-title md">
											<a href="#">Hun Sen sounds death knell for Cambodian </a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
										<p>
											Black farmers in the US’s South faced an with continued the failure in their efforts to run game.
										</p>
									</div>
								</div>
								<!-- item end-->
							</div>
							<!-- ts gird box end-->
						</div>
						<!-- col end-->
						<div class="col-lg-3">
							<div class="ts-grid-box ts-col-box">
								<div class="item">
									<a class="post-cat ts-orange-bg" href="#">travel</a>
									<div class="post-content">

										<h3 class="post-title md">
											<a href="#">Faangs diverge as investors rethink prospect</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
										<p>
											Black farmers in the US’s South faced an with continued the failure in their efforts to run game.
										</p>
									</div>
								</div>
								<!-- item end-->
							</div>
							<!-- ts gird box end-->
						</div>
						<!-- col end-->
					</div>
					<!-- row end-->
					<div class="row mb-30">
						<div class="col-lg-4">
							<div class="ts-grid-box ts-col-box">
								<div class="item">
									<a class="post-cat ts-blue-light-bg" href="#">Technology</a>
									<div class="post-content">

										<h3 class="post-title">
											<a href="#">They’re back! Kennedy Darling Cras named to return</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
								<!-- item end-->
							</div>
							<!-- ts gird box end-->
						</div>
						<!-- col end-->
						<div class="col-lg-4">
							<div class="ts-grid-box ts-col-box">
								<div class="item">
									<a class="post-cat ts-pink-bg" href="#">Music</a>
									<div class="post-content">

										<h3 class="post-title">
											<a href="#">Faangs diverge as investors rethink prospect</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
								<!-- item end-->
							</div>
							<!-- ts gird box end-->
						</div>
						<!-- col end-->
						<div class="col-lg-4">
							<div class="ts-grid-box ts-col-box">
								<div class="item">
									<a class="post-cat ts-yellow-bg" href="#">Foods</a>
									<div class="post-content">

										<h3 class="post-title">
											<a href="#">Easy teriyaki chicken with chicken broccoli</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
								<!-- item end-->
							</div>
							<!-- ts gird box end-->
						</div>
						<!-- col end-->
					</div>
					<!-- row end-->

					<div class="ts-grid-box category-item">
						<h2 class="ts-title">More News</h2>
						<div class="row">
							<div class="col-lg-3">
								<div class="item">
									<div class="ts-post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/tech/tech1.jpg" alt="">
										</a>
									</div>
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">Easy teriyaki chicken with broccoli</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
							</div>
							<!-- col end-->
							<div class="col-lg-3">
								<div class="item">
									<div class="ts-post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/fashion/fashion1.jpg" alt="">
										</a>
									</div>
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">Hands on with the Apple Watch Series 4</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
							</div>
							<!-- col end-->
							<div class="col-lg-3">
								<div class="item">
									<div class="ts-post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/sports/sports2.jpg" alt="">
										</a>
									</div>
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">Tourism in Dubai tourist favorite place</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
							</div>
							<!-- col end-->
							<div class="col-lg-3">
								<div class="item">
									<div class="ts-post-thumb">
										<a href="#">
											<img class="img-fluid" src="images/news/tech/tech3.jpg" alt="">
											<span class="fa fa-play-circle-o ts-video-icon"></span>
										</a>

									</div>
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">Beats did announce something, after all</a>
										</h3>
										<span class="post-date-info">
											<i class="fa fa-clock-o"></i>
											March 21, 2019
										</span>
									</div>
								</div>
							</div>
							<!-- col end-->
						</div>
						<!-- row end-->
					</div>
				</div>
				<!-- col end-->
				<div class="col-lg-3">
					<div class="widgets ts-grid-box  widgets-populer-post">
						<h3 class="widget-title">Populer Post</h3>
						<div class="ts-overlay-style">
							<div class="item">
								<div class="ts-post-thumb">
									<a href="#">
										<img class="img-fluid" src="images/news/tech/tech3.jpg" alt="">
									</a>
								</div>
								<div class="overlay-post-content">
									<div class="post-content">
										<h3 class="post-title">
											<a href="#">Tourism in Dubai is boom international tourist</a>
										</h3>
										<ul class="post-meta-info">
											<li>
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- ts-overlay-style  end-->

						<div class="post-content media">
							<img class="d-flex sidebar-img" src="images/news/sports/sports2.jpg" alt="">
							<div class="media-body align-self-center">
								<h4 class="post-title">
									<a href="#">18 month shoots himself by gun </a>
								</h4>
							</div>
						</div>
						<!-- post content end-->
						<div class="post-content media">
							<img class="d-flex sidebar-img" src="images/news/tech/tech2.jpg" alt="">
							<div class="media-body align-self-center">
								<h4 class="post-title">
									<a href="#">12 month shoots himself by gun </a>
								</h4>
							</div>
						</div>
						<!-- post content end-->
						<div class="post-content media">
							<img class="d-flex sidebar-img" src="images/news/tech/tech3.jpg" alt="">
							<div class="media-body align-self-center">
								<h4 class="post-title">
									<a href="#">17 month shoots himself by gun </a>
								</h4>
							</div>
						</div>
						<!-- post content end-->
					</div>
					<!-- widget end-->
					<div class="ts-grid-box widgets category-list-item">
						<h2 class="widget-title">Categories</h2>
						<ul class="category-list">
							<li>
								<a href="#">Travel
									<span class="ts-orange-bg">10</span>
								</a>
							</li>
							<li>
								<a href="#">Sports
									<span class="ts-green-bg">25</span>
								</a>
							</li>
							<li>
								<a href="#">Travel
									<span class="ts-orange-bg">10</span>
								</a>
							</li>
							<li>
								<a href="#">Fashion
									<span class="ts-pink-bg">10</span>
								</a>
							</li>
							<li>
								<a href="#">Technology
									<span class="ts-blue-bg">10</span>
								</a>
							</li>
							<li>
								<a href="#">Music
                           <span class="ts-pink-bg">10</span>
								</a>
							</li>
							<li>
								<a href="#">Fashion
									<span class="ts-pink-bg">10</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- col end-->
			</div>
			<!-- row end-->
		</div>
		<!-- container end-->
	</section>
	<!-- blog post wrapper end-->




	<!-- footer area -->
	<div class="footer-area">
		<!-- footer social list start-->
		<div class="ts-footer-social-list">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="footer-logo">
							<a href="#">
								
							</a>
						</div>
						<!-- footer logo end-->
					</div>
					<!-- col end-->

					<div class="col-lg-8 align-self-center">
						<ul class="footer-social">
							<li class="ts-facebook">
								<a href="https://www.facebook.com" target="_blank">
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
		</div>
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
				<div id="back-to-top" class="back-to-top">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-up"></i>
					</button>
				</div>
			</div><!-- Container end-->
		</footer>
		<!-- footer end -->
	</div>
	<!-- footer area end-->



	<!-- javaScript Files
	=============================================================================-->

	<!-- initialize jQuery Library -->
	<script src="js/jquery.min.js"></script>
	<!-- navigation JS -->
	<script src="js/navigation.js"></script>
	<!-- uikit JS -->
	<script src="js/uikit.min.js"></script>

	<script src="js/uikit-icons.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>

	<!-- magnific popup JS -->
	<script src="js/jquery.magnific-popup.min.js"></script>



	<!-- Bootstrap jQuery -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl-carousel.2.3.0.min.js"></script>

	<script src="js/slick.min.js"></script>

	<!-- smooth scroling -->
	<script src="js/smoothscroll.js"></script>

	<script src="js/main.js"></script>
</body>


<!-- Mirrored from demo.themewinter.com/html/vinazine/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Apr 2022 22:44:52 GMT -->
</html>