<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		
		
	    <title>Bridgeway Logistics</title>
	     @include('libraries.style')

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    
	</head>


	<body id="page-top">
		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content">
				  	<header class="header">
				  		<nav class="top-bar">
				  			<div class="overlay-bg">
					  			<div class="container">
					  				<div class="row">
					  					
					  					<div class="col-sm-6 col-xs-12">
						  					<div class="call-to-action">
						  						@yield('content1')
						  					</div><!-- /.call-to-action -->
					  					</div><!-- /.col-sm-6 -->

					  					<div class="col-sm-6 hidden-xs">
						  					<div class="topbar-right">
							  					<div class="lang-support pull-right">
													<select class="cs-select cs-skin-elastic">
														<option value="" disabled selected>Language</option>
														<option value="united-kingdom" data-class="flag-uk">English</option>
														<option value="france" data-class="flag-france">French</option>
														<option value="spain" data-class="flag-spain">Spanish</option>
														<option value="south-africa" data-class="flag-bd">Bengali</option>
													</select>
												</div>

						  						<ul class="social-links list-inline pull-right">
						  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						  							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						  							<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
						  						</ul>
						  					</div><!-- /.social-links -->
					  					</div><!-- /.col-sm-6 -->
						  				
					  				</div><!-- /.row -->
					  			</div><!-- /.container -->
				  			</div><!-- /.overlay-bg -->
				  		</nav><!-- /.top-bar -->

				  		<div id="search">
						    <button type="button" class="close">×</button>
						   @yield('Search')
						</div>
						
						@include('Components.navbar')
					</header>

                    <div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#main-carousel" data-slide-to="1"></li>
							<li data-target="#main-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slider/slide-1.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                       @yield('Home')
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->
                            <div class="item">
                                <img src="img/home.avif" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                      @yield('Home-01')
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>

                            <div class="item">
                                <img src="img/slider/Air.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                        @yield('Home-02')
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->
							
                        </div>
                        <!--.carousel-inner-->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Page 01</span>
                        </a>
                        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Page 02</span>
                        </a>
						<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Page 03</span>
                        </a>
                    </div>
                    <!-- #main-carousel-->


			        <!-- services start -->
					<section class="service-home section-padding">
			            <div class="container text-center">
			              <div class="row">
			                <div class="col-xs-12">
			                  @yield('service')
			                </div>
			              </div> <!-- /.row -->

			              <div class="row content-row">
			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home">
				              			<a href="#"><img src="img/trans.png" alt=""></a>
				              		</div>
				              		@yield('card')
				              		<a class="readmore" href="#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
			              		</div>
			              	</div><!-- /.col-sm-4 -->

			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home">
				              			<a href="#"><img src="img/move.png" alt=""></a>
				              		</div>
									@yield('card-1')
									<a class="readmore" href="#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
				              		</div>

			              	</div><!-- /.col-sm-4 -->

			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home">
				              			<a href="#"><img src="img/delivery.png" alt=""></a>
				              		</div>
									@yield('card-2')
				              		<a class="readmore" href="#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
			              	   </div>
			              	</div><!-- /.col-sm-4 -->
			              </div> <!-- /.row -->
			            </div><!-- /.container -->
			        </section>
			        <!-- services end -->

			        <!-- featuer-section start -->
			        <section class="feature-section section-padding">
				        <div class="container">
				        	<div class="row">
				        		<div class="col-sm-7 col-xs-12">
				        			@yield('feature')
				        		</div>
				        
				        	</div>
				        </div>
			        </section>
			        <!-- featuer-section end -->

			        <!-- why-us-setion start -->
			        <section class="why-us-setion section-padding">
			        	<div class="container">
			              <div class="row text-center">
			                <div class="col-xs-12">
			                 @yield('choose')
			                </div>
			              </div> <!-- /.row -->

			              <div class="row content-row">
			              	<div class="col-md-12">
								<div class="css-tab" role="tabpanel">

								  <!-- Nav tabs -->
								  <ul class="nav nav-tabs" role="tablist">
								    <li role="presentation" class="active"><a href="#secure" aria-controls="secure" role="tab" data-toggle="tab"><i class="flaticon-logistics15"></i> Secure</a></li>
								    <li role="presentation"><a href="#trackable" aria-controls="trackable" role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i> Trackable</a></li>
								    <li role="presentation"><a href="#fast" aria-controls="fast" role="tab" data-toggle="tab"><i class="flaticon-logistics16"></i> Fast</a></li>
								    <li role="presentation"><a href="#reliable" aria-controls="reliable" role="tab" data-toggle="tab"><i class="flaticon-broken43"></i> Reliable</a></li>
								  </ul>

								  <!-- Tab panes -->
								  <div class="tab-content">
								    <div role="tabpanel" class="tab-pane active fade in" id="secure">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="img/secture.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
													@yield('secure')
											    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="trackable">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="img/track.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    @yield('track')
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="fast">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="img/Fa.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	@yield('Fast')
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="reliable">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="img/reliable01.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
													@yield('reliable')
											    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								  </div>
								</div><!-- /.css-tab -->
			              	</div><!-- /.col-md-12 -->
			              </div><!-- /.row -->

			        	</div><!-- /.container -->
			        </section>
			        <!-- why-us-setion end -->

			        <!-- testimonial-section start -->
					<section class="testimonial-section testimonial2 section-padding">
			            <div class="container text-center">
			              <div class="row">
			                <div class="col-xs-12">
			                  <h2 class="section-title">We are Trusted By</h2>
			                  <span class="section-sub">Bridgeway Logistics: reliable partner, ensures efficiency, <br>timely deliveries through commitment to reliability and efficiency</span>
			                </div>
			              </div> <!-- /.row -->

			              <div class="row row-content">
			              	<div class="col-md-12">
								<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">

								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
								    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
								    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">

								    <div class="item active">
								    	
								    	<div class="testimonial-content">
								    		<p>"Bridgeway Logistics consistently delivers excellence!<br> Their meticulous attention to detail and unwavering commitment to efficiency make them a standout choice."</p>
											</p>
											<span class="client-title">Deanna Lewis</span>
								    		<span class="client-avatar"><img src="img/client/client-1.jpg" alt="client avatar"></span>
								    	</div><!-- /.testimonial-content -->
								    	
								    </div>
								    <div class="item">
								    	<div class="testimonial-content">
										<p>"Experience with Bridgeway Logistics has been exceptional!<br> Their flawless operations and dedication to punctuality have revolutionized our logistics."</p>
										<span class="client-title">- Sarah Johnson -</span>
								    		<span class="client-avatar"><img src="img/client/client-1.jpg" alt="client avatar"></span>
								    	</div><!-- /.testimonial-content -->
								    </div>


								    <div class="item">
								    	<div class="testimonial-content">
										<p>"Working with Bridgeway Logistics has been a pleasure! <br>From their impeccable operations to their steadfast commitment to timely deliveries,<br> they've exceeded our expectations." </p>
										<span class="client-title">- Emily Chen -</span>
								    		<span class="client-org"><a href="#" target="_blank">ThemeRox</a></span>
								    		<span class="client-avatar"><img src="img/client/client-1.jpg" alt="client avatar"></span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								  </div>
								 
								</div><!-- /.carousel -->
			              	</div><!-- /.col-md-12 -->
			              </div><!-- /.row -->

			              <hr>

			              <div class="partner-section">
				              <div class="row row-content">
				              	<div class="col-md-12">
									<div class="owl-carousel partner-carousel">
									    <div class="item">
									    	<a href="#"><img src="img/partner/p1.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="#"><img src="img/partner/p2.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="#"><img src="img/partner/p3.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="#"><img src="img/partner/p4.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="#"><img src="img/partner/p5.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="#"><img src="img/partner/p1.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="#"><img src="img/partner/p2.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="#"><img src="img/partner/p3.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="#"><img src="img/partner/p4.jpg" alt=""></a>
									    </div>
									</div>


							        <div class="partner-carousel-navigation">
							            <a class="prev"><i class="fa fa-angle-left"></i></a>
							            <a class="next"><i class="fa fa-angle-right"></i></a>
							        </div><!-- /.partner-carousel-navigation -->


				              	</div><!-- /.col-md-12 -->
				              </div><!-- /.row -->
			              </div><!-- /.partner-section -->
			            </div><!-- /.container -->
			        </section>
					
			        <!-- testimonial-section end -->

			        <!-- counter start -->
			        <section class="counter-section" data-stellar-background-ratio="0.5">
			        	<div class="container">
							<div class="row">
						        <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description flaticon-boat"><strong class="timer">799</strong>order delivered</span>
						          </div>
						        </div> 
						       <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description flaticon-international"><strong class="timer">19</strong>order delivered</span>
						          </div>
						        </div> 
						       <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description flaticon-compass"><strong class="timer">521</strong>order delivered</span>
						          </div>
						        </div> 
					      	</div> <!-- /.row -->
			        	</div><!-- /.container -->
			        </section><!-- /.counter-section -->
			        <!-- counter end -->

			        <!-- cta start -->
			        <section class="cta-section">
			        	<div class="container text-center">
			        		<a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn">Get a Quote</a>

							<!-- Modal -->
							<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h3 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your goods.</h3>
							      </div>
							      <div class="modal-body">
									<form id="contactForm" action="sendemail.php" method="POST">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
												    <label for="name">Name</label>
												    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Enter Your Company Name">
												</div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="company">Company Name</label>
											    <input id="company" name="company" type="text" class="form-control" placeholder="Your Company Name">
											  </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="phone">Phone Number</label>
											    <input id="phone" name="phone" type="text" class="form-control" placeholder="Company Mobile Number">
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="email">Email address</label>
											    <input id="email" name="email" type="email" class="form-control" required="" placeholder="Enter Company Email">
											  </div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="city">City Name</label>
											    <input id="city" name="city" type="text" class="form-control" placeholder="Location here">
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="subject">Subject</label>
											    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="Subject here">
											  </div>
											</div>
										</div>
										<div class="form-group text-area">
											<label for="message">Your Message</label>
											<textarea id="message" name="message" class="form-control" rows="2" placeholder="Others..."></textarea>
										</div>

										<button type="submit" class="btn btn-primary">Send Message</button>
									</form>
							      </div>
							    </div>
							  </div>
							</div>

			        	</div><!-- /.container -->
			        </section><!-- /.cta-section -->
			        <!-- cta end -->

			        <!-- footer-widget-section start -->
			        <section class="footer-widget-section section-padding">
			        	@include('Components.footer')
					<!-- /.container -->
			        </section><!-- /.cta-section -->
			        <!-- footer-widget-section end -->

			        <!-- copyright-section start -->
			        <footer class="copyright-section">
			        	@include('Components.copyright')<!-- /.container -->
			        </footer>
			        <!-- copyright-section end -->
	    		</div> <!-- .st-content -->
		    </div> <!-- .st-pusher -->
			
			<!-- OFF CANVAS MENU -->
	    	<div class="offcanvas-menu offcanvas-effect">
	    		<div class="offcanvas-wrap">
			        <div class="off-canvas-header">
			        	<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
			        </div>
			        <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
			            <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
			            <li>
			            	<a href="#">Pages</a>
			            	<ul>
								<li><a href="about.html">About</a></li>
							    <li><a href="service.html">Service</a></li>
							    <li><a href="our-people.html">Our people</a></li>
							    <li><a href="career.html">Career</a></li>
							    <li><a href="faq.html">FAQ Page</a></li> 
							    <li><a href="typography.html">Typography</a></li>
							</ul>
			            </li>
			            <li>
			            	<a href="#">Services</a>
			            	<ul>
								<li><a href="air.html">Air transportation</a></li>
								<li><a href="marine.html">Marine transportation</a></li>
								<li><a href="moving.html">Moving &amp; storage</a></li>
								<li><a href="shipping.html">Shipping &amp; operations</a></li>
								<li><a href="transportation.html">Transportation logistics</a></li>
								<li><a href="trucking.html">Trucking</a></li>
							</ul>

			            </li>
			            <li>
			            	<a href="#">Blog</a>
							<ul>
			            		<li>
			            			<a href="blog.html">Standard blog</a>
			            		</li>
			            		<li>
			            			<a href="blog-single.html">Single blog</a>
			            		</li>
			            	</ul>
			            </li>
			            <li><a href="contact.html">Contact</a></li>
			            <li><a href="typography.html">Typography</a></li>
			        </ul>
			        <div class="offcanvas-widgets hidden-sm hidden-xs">
				        <div id="twitterWidget">
							<h2>Tweeter feed</h2>				    	
							<div class="twitter-widget"></div>
						</div>
						<div class="newsletter-widget">
							<h2>Stay in Touch</h2>
							<p>Enter your email address to receive news &amp; offers from us</p>

							<form class="newsletter-form">
								<div class="form-group">
									<label class="sr-only" for="InputEmail1">Email address</label>
									<input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
									<button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
								</div>
							</form>		
							       				
						</div><!-- newsletter-widget -->
					</div>
				</div>
	      	</div><!-- .offcanvas-menu -->
		</div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>

	   @include('Script.script')
	</body>
</html>
